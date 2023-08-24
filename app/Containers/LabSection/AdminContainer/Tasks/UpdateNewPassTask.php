<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\AdminRepository;
use App\Containers\LabSection\AdminContainer\Models\Admin;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class UpdateNewPassTask extends ParentTask
{
    public function __construct(
        protected AdminRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data, $id): Admin
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
