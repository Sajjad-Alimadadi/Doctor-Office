<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\AdminContainer\Data\Repositories\AdminRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CheckForLoginAdminTask extends ParentTask
{
    public function __construct(
        protected AdminRepository $repository
    ) {
    }


    /**
     * @param array $data
     * @return int|bool
     * @throws NotFoundException
     */
    public function run(array $data): int|bool
    {
        try {
            return $this->repository->CheckForLoginAdmin($data);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
