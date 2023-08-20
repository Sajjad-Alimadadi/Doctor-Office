<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\DeleteOperationServiceTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteOperationServiceAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteOperationServiceTask::class)->run($array['id']);
    }
}
