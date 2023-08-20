<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\DoctorContainer\Data\Repositories\SkillRepository;
use App\Containers\LabSection\DoctorContainer\Models\Skill;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateDoctorSkillTask extends ParentTask
{
    public function __construct(
        protected SkillRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Skill
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
