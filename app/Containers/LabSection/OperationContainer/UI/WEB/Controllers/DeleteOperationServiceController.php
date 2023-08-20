<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\DeleteOperationServiceAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\DeleteOperationServiceRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteOperationServiceController extends WebController
{
    public function run(DeleteOperationServiceRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteOperationServiceAction::class)->run($data);
        return redirect('/operation/service')->with('result', 'حذف با موفقیت انجام شد');
    }
}
