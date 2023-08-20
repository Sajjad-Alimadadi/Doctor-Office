<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\LabSection\VisitContainer\Tasks\GetAllVisitDoctorTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllVisitDoctorAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return app(GetAllVisitDoctorTask::class)->run();
    }
}
