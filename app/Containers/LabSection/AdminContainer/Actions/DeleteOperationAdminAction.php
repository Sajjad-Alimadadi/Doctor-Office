<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\DeleteOperationAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteOperationAdminAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteOperationAdminTask::class)->run($array['id']);
    }
}
