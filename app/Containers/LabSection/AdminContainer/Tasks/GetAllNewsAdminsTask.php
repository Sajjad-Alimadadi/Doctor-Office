<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\NewsRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class GetAllNewsAdminsTask extends ParentTask
{
    public function __construct(
        protected NewsRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->getAll();
    }
}
