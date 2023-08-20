<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\GetAllNewsAdminsTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllNewsAdminAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllNewsAdminsTask::class)->run();
    }
}
