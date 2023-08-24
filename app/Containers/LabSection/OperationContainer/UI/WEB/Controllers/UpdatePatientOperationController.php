<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\UpdatePatientOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\UpdatePatientOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdatePatientOperationController extends WebController
{
    public function run(UpdatePatientOperationRequest $request)
    {
        $data = $this->sanitize($request, [
            '_token'       => $request->post('_token'),
            'id'           => $request->post('id'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'nationalcode' => $request->post('nationalcode'),
            'mobile'       => $request->post('mobile'),
            'birthday'     => $request->post('birthday'),
            'pass'         => $request->post('pass'),
        ]);
        $result = app(UpdatePatientOperationAction::class)->run($data);
        return redirect('/operation/patient/get')->with('result', 'ویرایش با موفقیت انجام شد');
    }

}
