<?php

namespace App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers;

use App\Containers\LabSection\DoctorContainer\Actions\CheckForLoginDoctorAction;
use App\Containers\LabSection\DoctorContainer\UI\WEB\Requests\CheckForLoginDoctorRequest;
use App\Ship\Parents\Controllers\WebController;

class CheckForLoginDoctorController extends WebController
{
    public function run(CheckForLoginDoctorRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'mobile' => $request->post('mobile'),
            'pass'   => $request->post('pass'),
        ]);
        $result = app(CheckForLoginDoctorAction::class)->run($data);
        return redirect()->back()->with('LoginResult', $result);
    }
}
