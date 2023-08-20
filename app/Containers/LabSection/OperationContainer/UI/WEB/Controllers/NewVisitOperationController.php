<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\NewVisitOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\NewVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class NewVisitOperationController extends WebController
{
    public function run(NewVisitOperationRequest $request): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $result = app(NewVisitOperationAction::class)->run($request);
        return View('labSection@operationContainer::newVisitOperation', ['result' => $result]);
    }
}
