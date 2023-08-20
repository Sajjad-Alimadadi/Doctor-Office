<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\EditShowAllPicAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\EditShowAllPicRequest;
use App\Ship\Parents\Controllers\WebController;

class EditShowAllPicController extends WebController
{
    public function run(EditShowAllPicRequest $request)
    {
        $data = $request->sanitizeInput([
            'hash' => $request->route('hash'),
            'id'   => $request->route('id'),
        ]);
        $result = app(EditShowAllPicAction::class)->run($data);
        return View('labSection@operationContainer::editShowAllPic', ['result' => $result]);
    }
}
