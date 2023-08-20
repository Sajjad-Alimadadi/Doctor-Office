<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\ShowAllPicTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class ShowAllPicAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return app(ShowAllPicTask::class)->run($array['id']);
    }
}
