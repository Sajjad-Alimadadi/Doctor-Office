<?php

namespace App\Containers\LabSection\OperationContainer\Tasks;

use App\Containers\LabSection\PatientContainer\Data\Repositories\PatientRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeletePatientOperationTask extends ParentTask
{
    public function __construct(
        protected PatientRepository $repository
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
