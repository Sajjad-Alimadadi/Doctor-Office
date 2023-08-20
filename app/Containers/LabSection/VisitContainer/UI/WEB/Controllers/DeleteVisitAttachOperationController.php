<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\DeleteVisitAttachOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\DeleteVisitAttachOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteVisitAttachOperationController extends WebController
{
    public function run(DeleteVisitAttachOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteVisitAttachOperationAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
