<?php

namespace App\Containers\LabSection\PatientContainer\UI\WEB\Controllers;

use App\Containers\LabSection\PatientContainer\Actions\CheckForLoginPatientAction;
use App\Containers\LabSection\PatientContainer\UI\WEB\Requests\CheckForLoginPatientRequest;
use App\Ship\Parents\Controllers\WebController;

class CheckForLoginPatientController extends WebController
{
    public function run(CheckForLoginPatientRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'mobile' => $request->post('mobile'),
            'pass'   => $request->post('pass'),
        ]);
        $result = app(CheckForLoginPatientAction::class)->run($data);
        return redirect()->back()->with('LoginResult', $result);
    }
}
