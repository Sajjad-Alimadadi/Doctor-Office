<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\DeleteDoctorSkillAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\DeleteDoctorSkillRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteDoctorSkillController extends WebController
{
    public function run(DeleteDoctorSkillRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteDoctorSkillAction::class)->run($data);
        return redirect('/operation/skill')->with('result', 'حذف با موفقیت انجام شد');
    }
}
