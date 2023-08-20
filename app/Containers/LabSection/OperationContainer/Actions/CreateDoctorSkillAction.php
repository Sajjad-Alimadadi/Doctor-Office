<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\DoctorContainer\Models\Skill;
use App\Containers\LabSection\OperationContainer\Tasks\CreateDoctorSkillTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class CreateDoctorSkillAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Skill
    {
        return app(CreateDoctorSkillTask::class)->run($data);
    }
}
