<?php

namespace App\Containers\LabSection\VisitContainer\Tasks;

use App\Containers\LabSection\VisitContainer\Data\Repositories\VisitRepository;
use App\Containers\LabSection\VisitContainer\Models\Visit;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateVisitTask extends ParentTask
{
    public function __construct(
        protected VisitRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Visit
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
