<?php

namespace App\Containers\LabSection\VisitContainer\Tasks;

use App\Containers\LabSection\VisitContainer\Data\Repositories\VisitRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class GetAllVisitDoctorTask extends ParentTask
{
    public function __construct(
        protected VisitRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->doctorList();
    }
}
