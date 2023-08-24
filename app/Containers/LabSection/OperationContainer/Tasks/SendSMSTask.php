<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class SendSMSTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    /**
     * @param array $data
     * @return int|string|null
     */
    public function run(array $data): int|string|null
    {
        return $this->repository->sendSMS($data);
    }
}
