<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\CreateDoctorSkillAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\CreateDoctorSkillRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateDoctorSkillController extends WebController
{
    public function run(CreateDoctorSkillRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'title'  => $request->post('title'),
        ]);
        $result = app(CreateDoctorSkillAction::class)->run($data);
        return redirect('/operation/skill')->with('result', 'ثبت تخصص با موفقیت انجام شد');
    }

}
