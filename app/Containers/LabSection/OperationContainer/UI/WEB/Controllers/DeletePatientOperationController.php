<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\DeletePatientOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\DeletePatientOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeletePatientOperationController extends WebController
{
    public function run(DeletePatientOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeletePatientOperationAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
