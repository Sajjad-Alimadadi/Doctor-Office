<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\UpdateDoctorOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\UpdateDoctorOperationRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateDoctorOperationController extends WebController
{
    public function run(UpdateDoctorOperationRequest $request)
    {
        $data = $this->sanitize($request, [
            '_token'       => $request->post('_token'),
            'id'           => $request->post('id'),
            'doctorcode'   => $request->post('doctorcode'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'nationalcode' => $request->post('nationalcode'),
            'mobile'       => $request->post('mobile'),
            'birthday'     => $request->post('birthday'),
            'pass'         => $request->post('pass'),
        ]);
        $result = app(UpdateDoctorOperationAction::class)->run($data);
        return redirect('/operation/doctor/get')->with('result', 'ویرایش با موفقیت انجام شد');
    }

}
