<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\GetAllDoctorOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllDoctorOperationAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllDoctorOperationTask::class)->run();
    }
}
