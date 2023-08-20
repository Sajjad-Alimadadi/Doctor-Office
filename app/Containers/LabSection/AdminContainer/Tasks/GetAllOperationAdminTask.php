<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\AdminRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class GetAllOperationAdminTask extends ParentTask
{
    public function __construct(
        protected AdminRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->getAllOperationAdmin();
    }
}
