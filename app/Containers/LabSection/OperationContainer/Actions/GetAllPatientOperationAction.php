<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\GetAllPatientOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllPatientOperationAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllPatientOperationTask::class)->run();
    }
}
