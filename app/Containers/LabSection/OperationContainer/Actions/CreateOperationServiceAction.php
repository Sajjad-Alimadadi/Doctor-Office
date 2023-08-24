<?php

namespace App\Containers\LabSection\OperationContainer\Actions;

use App\Containers\LabSection\OperationContainer\Models\Service;
use App\Containers\LabSection\OperationContainer\Tasks\CreateOperationServiceTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class CreateOperationServiceAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Service
    {
        return app(CreateOperationServiceTask::class)->run($data);
    }
}
