<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\ShowAllPicAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\ShowAllPicRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ShowAllPicController extends WebController
{
    public function run(ShowAllPicRequest $request): View|Factory|Application
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(ShowAllPicAction::class)->run($data);
        return View('labSection@operationContainer::showAllPic', ['result' => $result]);
    }
}
