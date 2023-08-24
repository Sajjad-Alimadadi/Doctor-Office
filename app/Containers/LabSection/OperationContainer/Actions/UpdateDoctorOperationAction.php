<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\OperationContainer\Tasks\UpdateDoctorOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class UpdateDoctorOperationAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Doctor
    {
        unset($data['_token']);
        if(isset($data['pass'])){
            $data['pass'] = md5($data['pass']);
        }
        return app(UpdateDoctorOperationTask::class)->run($data, $data['id']);
    }
}
