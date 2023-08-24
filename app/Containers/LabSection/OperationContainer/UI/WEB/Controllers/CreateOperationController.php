<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\CreateOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\CreateOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateOperationController extends WebController
{
    public function run(CreateOperationRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'       => $request->post('_token'),
            'mobile'       => $request->post('mobile'),
            'nationalcode' => $request->post('nationalcode'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'birthday'     => $request->post('birthday'),
            'startdate'    => $request->post('birthday'),
            'pass'         => $request->post('pass'),
            'pass2'        => $request->post('pass2'),
        ]);
        $result = app(CreateOperationAction::class)->run($data);
        return redirect('/admin/operation/get')->with('SignupResult', 'ثبت نام با موفقیت انجام شد');
    }

}
