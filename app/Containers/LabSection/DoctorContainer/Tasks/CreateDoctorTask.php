<?php

namespace App\Containers\LabSection\DoctorContainer\Tasks;

use App\Containers\LabSection\DoctorContainer\Data\Repositories\DoctorRepository;
use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateDoctorTask extends ParentTask
{
    public function __construct(
        protected DoctorRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Doctor
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
