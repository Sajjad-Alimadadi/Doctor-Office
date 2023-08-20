<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\GetAllDoctorSkillTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllDoctorSkillAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllDoctorSkillTask::class)->run();
    }
}
