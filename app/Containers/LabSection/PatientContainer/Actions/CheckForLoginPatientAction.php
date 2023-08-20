<?php

namespace App\Containers\LabSection\PatientContainer\Actions;

use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Containers\LabSection\PatientContainer\Tasks\CheckForLoginPatientTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CheckForLoginPatientAction extends ParentAction
{


    /**
     * @param array $data
     * @return Patient
     */
    public function run(array $data): int|bool
    {
        unset($data['_token']);
        $data['pass'] = md5($data['pass']);
        return app(CheckForLoginPatientTask::class)->run($data);
    }
}
