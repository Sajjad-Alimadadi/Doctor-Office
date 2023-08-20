<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\DeleteDoctorOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\DeleteDoctorOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteDoctorOperationController extends WebController
{
    public function run(DeleteDoctorOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteDoctorOperationAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
