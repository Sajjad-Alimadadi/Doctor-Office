<?php

namespace App\Containers\LabSection\PatientContainer\Tasks;

use App\Containers\LabSection\PatientContainer\Data\Repositories\PatientRepository;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreatePatientTask extends ParentTask
{
    public function __construct(
        protected PatientRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Patient
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
