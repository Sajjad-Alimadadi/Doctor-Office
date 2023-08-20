<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class EditShowAllPicTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    public function run(array $array): mixed
    {
        return $this->repository->EditShowAllPic($array);
    }
}
