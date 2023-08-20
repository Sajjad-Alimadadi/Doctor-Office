<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class ShowAllPicTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    /**
     * @param string $id
     * @return mixed
     */
    public function run(string $id): mixed
    {
        return $this->repository->showAllPic($id);
    }
}
