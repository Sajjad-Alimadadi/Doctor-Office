<?php

namespace App\Containers\LabSection\VisitContainer\Actions;

use App\Containers\LabSection\VisitContainer\Tasks\DeleteUploadImageVisitOperationTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteUploadImageVisitOperationAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteUploadImageVisitOperationTask::class)->run($array['id']);
    }
}
