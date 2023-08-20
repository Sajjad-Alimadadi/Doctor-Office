<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\DeleteVisitOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\DeleteVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteVisitOperationController extends WebController
{
    public function run(DeleteVisitOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteVisitOperationAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
