<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\GetAllVisitOperationAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\GetAllVisitOperationRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllVisitOperationController extends WebController
{
    public function run(GetAllVisitOperationRequest $request): View|Factory|Application
    {
        $result = app(GetAllVisitOperationAction::class)->run($request);
        return View('labSection@visitContainer::visitOperation', ['result' => $result]);
    }
}
