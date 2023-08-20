<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Containers\LabSection\OperationContainer\Tasks\CreateOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateOperationAction extends ParentAction
{

    public function run(array $data): Operation
    {
        unset($data['_token']);
        unset($data['pass2']);
        $data['is_active'] = 1;
        $data['pass'] = md5($data['pass']);
        return app(CreateOperationTask::class)->run($data);
    }
}
