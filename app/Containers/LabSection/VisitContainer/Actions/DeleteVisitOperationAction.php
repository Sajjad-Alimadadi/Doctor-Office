<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\VisitContainer\Tasks\DeleteVisitOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteVisitOperationAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteVisitOperationTask::class)->run($array['id']);
    }
}
