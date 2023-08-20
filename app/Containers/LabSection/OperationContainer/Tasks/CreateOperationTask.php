<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateOperationTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Operation
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
