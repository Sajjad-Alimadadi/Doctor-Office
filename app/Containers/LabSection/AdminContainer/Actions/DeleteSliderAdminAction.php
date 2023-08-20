<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\DeleteSliderAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteSliderAdminAction extends ParentAction
{


    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteSliderAdminTask::class)->run($array['id']);
    }
}
