<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\CheckForLoginOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CheckForLoginOperationAction extends ParentAction
{


    /**
     * @param array $data
     * @return int|bool
     */
    public function run(array $data): int|bool
    {
        unset($data['_token']);
        $data['pass'] = md5($data['pass']);
        return app(CheckForLoginOperationTask::class)->run($data);
    }
}
