<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\GetAllOperationServiceAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\GetAllOperationServiceRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllOperationServiceController extends WebController
{
    public function run(GetAllOperationServiceRequest $request): View|Factory|Application
    {
        $result = app(GetAllOperationServiceAction::class)->run($request);
        return View('labSection@operationContainer::getAllOperationService', ['result' => $result]);
    }
}
