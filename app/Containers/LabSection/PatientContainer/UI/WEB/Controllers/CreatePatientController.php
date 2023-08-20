<?php

namespace App\Containers\LabSection\PatientContainer\UI\WEB\Controllers;

use App\Containers\LabSection\PatientContainer\Actions\CreatePatientAction;
use App\Containers\LabSection\PatientContainer\UI\WEB\Requests\CreatePatientRequest;
use App\Ship\Parents\Controllers\WebController;

class CreatePatientController extends WebController
{
    public function run(CreatePatientRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'       => $request->post('_token'),
            'mobile'       => $request->post('mobile'),
            'nationalcode' => $request->post('nationalcode'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'birthday'     => $request->post('birthday'),
            'pass'         => $request->post('pass'),
            'pass2'        => $request->post('pass2'),
        ]);
        $result = app(CreatePatientAction::class)->run($data);
        return redirect('/patient/login')->with('SignupResult', 'ثبت نام با موفقیت انجام شد');
    }

}
