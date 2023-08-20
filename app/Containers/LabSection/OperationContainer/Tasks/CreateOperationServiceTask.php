<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\ServicesRepository;
use App\Containers\LabSection\OperationContainer\Models\Services;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateOperationServiceTask extends ParentTask
{
    public function __construct(
        protected ServicesRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Services
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
