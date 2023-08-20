<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\GetAllPatientOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\GetAllPatientOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllPatientOperationController extends WebController
{
    public function run(GetAllPatientOperationRequest $request): View|Factory|Application
    {
        $result = app(GetAllPatientOperationAction::class)->run($request);
        return View('labSection@operationContainer::getAllPatientOperation', ['result' => $result]);
    }
}
