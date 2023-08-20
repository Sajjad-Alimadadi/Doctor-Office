<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\CreateOperationServiceAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\CreateOperationServiceRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateOperationServiceController extends WebController
{
    public function run(CreateOperationServiceRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'title'  => $request->post('title'),
        ]);
        $result = app(CreateOperationServiceAction::class)->run($data);
        return redirect('/operation/service')->with('result', 'ثبت خدمات مرکز با موفقیت انجام شد');
    }

}
