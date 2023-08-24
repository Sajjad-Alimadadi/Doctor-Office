<?php

namespace App\Containers\LabSection\AdminContainer\Actions;

use App\Containers\LabSection\AdminContainer\Models\Admin;
use App\Containers\LabSection\AdminContainer\Tasks\UpdateNewPassTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class UpdateNewPassAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Admin
    {
        unset($data['_token']);
        if (isset($data['pass'])) {
            $data['pass'] = md5($data['pass']);
        }
        return app(UpdateNewPassTask::class)->run($data, $data['id']);
    }
}
