<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\DeleteNewsAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteNewsAdminAction extends ParentAction
{


    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteNewsAdminTask::class)->run($array['id']);
    }
}
