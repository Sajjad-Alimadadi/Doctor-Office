<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class UpdateOperationTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data, $id): Operation
    {

        try {
            return $this->repository->update($data, $id);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
