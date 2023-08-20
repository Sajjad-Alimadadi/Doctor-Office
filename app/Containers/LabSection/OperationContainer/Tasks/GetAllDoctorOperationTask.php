<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class GetAllDoctorOperationTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->getAllDoctorOperation();
    }
}
