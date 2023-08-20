<?php

namespace App\Containers\LabSection\SiteContainer\Actions;

use App\Containers\LabSection\SiteContainer\Tasks\IndexSiteTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class IndexSiteAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(IndexSiteTask::class)->run();
    }
}
