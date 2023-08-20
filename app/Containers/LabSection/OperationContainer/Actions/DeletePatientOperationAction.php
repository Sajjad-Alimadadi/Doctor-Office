<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\DeletePatientOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePatientOperationAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeletePatientOperationTask::class)->run($array['id']);
    }
}
