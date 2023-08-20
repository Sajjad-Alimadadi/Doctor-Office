<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CheckForLoginOperationTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    /**
     * @throws NotFoundException
     */
    public function run(array $data): int|bool
    {
        try {
            return $this->repository->CheckForLoginOperation($data);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
