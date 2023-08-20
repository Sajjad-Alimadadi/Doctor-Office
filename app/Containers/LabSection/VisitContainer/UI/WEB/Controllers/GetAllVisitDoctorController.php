<?php

namespace App\Containers\LabSection\VisitContainer\UI\WEB\Controllers;

use App\Containers\LabSection\VisitContainer\Actions\GetAllVisitDoctorAction;
use App\Containers\LabSection\VisitContainer\UI\WEB\Requests\GetAllVisitDoctorRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllVisitDoctorController extends WebController
{
    public function run(GetAllVisitDoctorRequest $request): View|Factory|Application
    {
        $result = app(GetAllVisitDoctorAction::class)->run($request);
        return View('labSection@visitContainer::visitDoctor', ['result' => $result]);
    }
}
