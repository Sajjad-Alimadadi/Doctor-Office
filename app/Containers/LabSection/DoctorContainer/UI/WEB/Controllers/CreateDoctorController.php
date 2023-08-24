<?php

namespace App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers;

use App\Containers\LabSection\DoctorContainer\Actions\CreateDoctorAction;
use App\Containers\LabSection\DoctorContainer\UI\WEB\Requests\CreateDoctorRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateDoctorController extends WebController
{
    public function run(CreateDoctorRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'       => $request->post('_token'),
            'skill_id'     => $request->post('skill_id'),
            'doctorcode'   => $request->post('doctorcode'),
            'name'         => $request->post('name'),
            'family'       => $request->post('family'),
            'mobile'       => $request->post('mobile'),
            'pass'         => $request->post('pass'),
            'pass2'        => $request->post('pass2'),
        ]);

        $result = app(CreateDoctorAction::class)->run($data);
        return redirect('/operation/doctor/get')->with('SignupResult', 'ثبت نام با موفقیت انجام شد');
    }

}
