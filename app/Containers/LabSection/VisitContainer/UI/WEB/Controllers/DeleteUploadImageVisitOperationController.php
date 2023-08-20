<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\DeleteUploadImageVisitOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\DeleteUploadImageVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteUploadImageVisitOperationController extends WebController
{
    public function run(DeleteUploadImageVisitOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteUploadImageVisitOperationAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
