<?php

namespace App\Containers\LabSection\DoctorContainer\Tasks;

use App\Containers\LabSection\DoctorContainer\Data\Repositories\DoctorRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CheckForLoginDoctorTask extends ParentTask
{
    public function __construct(
        protected DoctorRepository $repository
    ) {
    }


    /**
     * @throws NotFoundException
     */
    public function run(array $data): int|bool
    {
        try {
            return $this->repository->CheckForLoginDoctor($data);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
