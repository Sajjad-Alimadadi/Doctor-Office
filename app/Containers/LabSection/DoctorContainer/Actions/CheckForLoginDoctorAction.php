<?php

namespace App\Containers\LabSection\DoctorContainer\Actions;

use App\Containers\LabSection\DoctorContainer\Tasks\CheckForLoginDoctorTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CheckForLoginDoctorAction extends ParentAction
{


    /**
     * @param array $data
     * @return int|bool
     */
    public function run(array $data): int|bool
    {
        unset($data['_token']);
        $data['pass'] = md5($data['pass']);
        return app(CheckForLoginDoctorTask::class)->run($data);
    }
}
