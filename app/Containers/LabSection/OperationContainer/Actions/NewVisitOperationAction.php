<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\LabSection\OperationContainer\Tasks\NewVisitOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class NewVisitOperationAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return app(NewVisitOperationTask::class)->run();
    }
}
