<?php

namespace App\Containers\LabSection\VisitContainer\Tasks;

use App\Containers\LabSection\VisitContainer\Data\Repositories\VisitRepository;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class DeleteVisitAttachOperationTask extends ParentTask
{
    public function __construct(
        protected VisitRepository $repository
    ) {
    }


    /**
     * @param $id
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = Visit::query()->where('id', $id)->get()->first();
            $file = public_path() . "/visit/" . $result['file'];
            File::delete($file);
            return Visit::query()->where('id', $id)->update(array('file' => null));
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
