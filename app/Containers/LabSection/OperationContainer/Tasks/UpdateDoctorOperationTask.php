<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\DoctorContainer\Data\Repositories\DoctorRepository;
use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class UpdateDoctorOperationTask extends ParentTask
{
    public function __construct(
        protected DoctorRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data, $id): Doctor
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
