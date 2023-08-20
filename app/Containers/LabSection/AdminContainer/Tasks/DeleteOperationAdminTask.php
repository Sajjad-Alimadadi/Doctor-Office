<?php

namespace App\Containers\LabSection\AdminContainer\Tasks;

use App\Containers\LabSection\OperationContainer\Data\Repositories\OperationRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteOperationAdminTask extends ParentTask
{
    public function __construct(
        protected OperationRepository $repository
    ) {
    }


    /**
     * @param $id
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            return $this->repository->delete($id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
