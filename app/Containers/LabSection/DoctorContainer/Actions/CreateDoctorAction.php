<?php

namespace App\Containers\LabSection\DoctorContainer\Actions;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\DoctorContainer\Tasks\CreateDoctorTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateDoctorAction extends ParentAction
{

    public function run(array $data): Doctor
    {
        unset($data['_token']);
        unset($data['pass2']);
        $data['is_active'] = 1;
        $data['pass'] = md5($data['pass']);
        return app(CreateDoctorTask::class)->run($data);
    }
}
