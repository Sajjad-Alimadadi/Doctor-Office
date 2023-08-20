<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\DeleteDoctorOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteDoctorOperationAction extends ParentAction
{


    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteDoctorOperationTask::class)->run($array['id']);
    }
}
