<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\UpdatePatientOperationTask;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class UpdatePatientOperationAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Patient
    {
        unset($data['_token']);
        if (isset($data['pass'])) {
            $data['pass'] = md5($data['pass']);
        }
        return app(UpdatePatientOperationTask::class)->run($data, $data['id']);
    }
}
