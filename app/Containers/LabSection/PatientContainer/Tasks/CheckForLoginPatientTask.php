<?php

namespace App\Containers\LabSection\PatientContainer\Tasks;

use App\Containers\LabSection\PatientContainer\Data\Repositories\PatientRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CheckForLoginPatientTask extends ParentTask
{
    public function __construct(
        protected PatientRepository $repository
    ) {
    }


    /**
     * @throws NotFoundException
     */
    public function run(array $data): int|bool
    {
        try {
            return $this->repository->CheckForLoginPatient($data);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
