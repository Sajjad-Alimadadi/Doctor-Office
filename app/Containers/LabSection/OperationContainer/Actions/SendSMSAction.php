<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\SendSMSTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class SendSMSAction extends ParentAction
{


    /**
     * @param array $data
     * @return int|null
     */
    public function run(array $data): int|null
    {
        return app(SendSMSTask::class)->run($data);
    }
}
