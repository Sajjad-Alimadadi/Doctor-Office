<?php

namespace App\Containers\LabSection\PatientContainer\Actions;

use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Containers\LabSection\PatientContainer\Tasks\CreatePatientTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePatientAction extends ParentAction
{

    public function run(array $data): Patient
    {
        unset($data['_token']);
        unset($data['pass2']);
        $data['is_active'] = 1;
        $data['pass'] = md5($data['pass']);
        return app(CreatePatientTask::class)->run($data);
    }
}
