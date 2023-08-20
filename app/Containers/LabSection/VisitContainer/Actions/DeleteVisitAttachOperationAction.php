<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\VisitContainer\Tasks\DeleteVisitAttachOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteVisitAttachOperationAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteVisitAttachOperationTask::class)->run($array['id']);
    }
}
