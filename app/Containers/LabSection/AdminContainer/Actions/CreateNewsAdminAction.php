<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Models\News;
use App\Containers\LabSection\AdminContainer\Tasks\CreateNewsAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateNewsAdminAction extends ParentAction
{


    /**
     * @param array $data
     * @return News
     */
    public function run(array $data): News
    {
        unset($data['_token']);
        return app(CreateNewsAdminTask::class)->run($data);
    }
}
