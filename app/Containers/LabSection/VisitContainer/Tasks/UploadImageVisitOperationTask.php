<?php

namespace App\Containers\LabSection\VisitContainer\Tasks;

use App\Containers\LabSection\VisitContainer\Data\Repositories\VisitImageRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class UploadImageVisitOperationTask extends ParentTask
{
    public function __construct(
        protected VisitImageRepository $repository
    ) {
    }


    /**
     * @param array $array
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return $this->repository->list($array['visit_id']);
    }
}
