<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\GetAllVisitAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\GetAllVisitRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllVisitController extends WebController
{
    public function run(GetAllVisitRequest $request): View|Factory|Application
    {
        $result = app(GetAllVisitAction::class)->run($request);
        return View('labSection@visitContainer::visitPatient', ['result' => $result]);
    }
}
