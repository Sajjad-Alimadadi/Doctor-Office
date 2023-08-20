<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\LabSection\VisitContainer\Tasks\GetAllVisitTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllVisitAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return app(GetAllVisitTask::class)->run();
    }
}
