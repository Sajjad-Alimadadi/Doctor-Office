<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\GetAllSliderAdminTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetAllSliderActionAdmin extends ParentAction
{


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(GetAllSliderAdminTask::class)->run();
    }
}
