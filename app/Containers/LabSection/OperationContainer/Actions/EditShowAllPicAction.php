<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Tasks\EditShowAllPicTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class EditShowAllPicAction extends ParentAction
{

    /**
     * @param array $array
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return app(EditShowAllPicTask::class)->run($array);
    }
}
