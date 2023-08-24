<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Containers\LabSection\VisitContainer\Models\VisitImage;
use App\Containers\LabSection\VisitContainer\Tasks\CreateVisitImageTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

class CreateVisitImageAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): VisitImage
    {
        unset($data['_token']);
        $visitId = Visit::query()->where('id', $data['visit_id'])->first();
        if ($visitId === null) {
            throw ValidationException::withMessages(['visit_id' => ' visit_id Not Found']);
        }
        $operationId = Operation::query()->where('id', Cache::get('operation')['id'])->first();
        if ($operationId === null) {
            throw ValidationException::withMessages(['operation_id' => ' operation_id Not Found']);
        }

        $destination = dirname(base_path()) . '/public_html/visit-image';
        if (!is_dir($destination)) {
            mkdir($destination, 0777, true);
        }
        $destination .= '/';
        /** @var UploadedFile $file */
        $file = $data['image'];
        $fileName = md5(rand(1111111, 99999999) . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        $file->move($destination, $fileName);

        $data['image'] = $fileName;
        $data['operation_id'] = Cache::get('operation')['id'];


        return app(CreateVisitImageTask::class)->run($data);
    }
}
