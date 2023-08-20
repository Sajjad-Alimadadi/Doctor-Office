<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\GetAllOperationAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllOperationAdminAction extends ParentAction
{


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllOperationAdminTask::class)->run();
    }
}
