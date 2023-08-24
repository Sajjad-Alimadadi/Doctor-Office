<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Tasks\UpdateOperationTask;
use App\Containers\LabSection\OperationContainer\Models\Operation;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class UpdateOperationAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Operation
    {
        unset($data['_token']);
        if (isset($data['pass'])) {
            $data['pass'] = md5($data['pass']);
        }
        return app(UpdateOperationTask::class)->run($data, $data['id']);
    }
}
