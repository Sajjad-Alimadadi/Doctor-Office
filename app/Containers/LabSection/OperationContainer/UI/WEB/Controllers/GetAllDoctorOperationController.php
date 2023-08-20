<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\GetAllDoctorOperationAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\GetAllDoctorOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllDoctorOperationController extends WebController
{
    public function run(GetAllDoctorOperationRequest $request): View|Factory|Application
    {
        $result = app(GetAllDoctorOperationAction::class)->run($request);
        return View('labSection@operationContainer::getAllDoctorOperation', ['result' => $result]);
    }
}
