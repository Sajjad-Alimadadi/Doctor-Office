<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\DeleteDoctorSkillTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteDoctorSkillAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteDoctorSkillTask::class)->run($array['id']);
    }
}
