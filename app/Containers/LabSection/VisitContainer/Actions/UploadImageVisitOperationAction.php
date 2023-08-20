<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\VisitContainer\Tasks\UploadImageVisitOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class UploadImageVisitOperationAction extends ParentAction
{

    /**
     * @param array $array
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return app(UploadImageVisitOperationTask::class)->run($array);
    }
}
