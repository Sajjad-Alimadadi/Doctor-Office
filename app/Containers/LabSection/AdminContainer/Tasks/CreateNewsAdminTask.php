<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\NewsRepository;
use App\Containers\LabSection\AdminContainer\Models\News;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateNewsAdminTask extends ParentTask
{
    public function __construct(
        protected NewsRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): News
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
