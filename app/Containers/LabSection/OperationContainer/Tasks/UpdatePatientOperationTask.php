<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\PatientContainer\Data\Repositories\PatientRepository;
use App\Containers\LabSection\PatientContainer\Models\Patient;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class UpdatePatientOperationTask extends ParentTask
{
    public function __construct(
        protected PatientRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data, $id): Patient
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
