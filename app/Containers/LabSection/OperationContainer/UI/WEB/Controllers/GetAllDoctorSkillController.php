<?php

namespace App\Containers\LabSection\OperationContainer\UI\WEB\Controllers;

use App\Containers\LabSection\OperationContainer\Actions\GetAllDoctorSkillAction;
use App\Containers\LabSection\OperationContainer\UI\WEB\Requests\GetAllDoctorSkillRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllDoctorSkillController extends WebController
{
    public function run(GetAllDoctorSkillRequest $request): View|Factory|Application
    {
        $result = app(GetAllDoctorSkillAction::class)->run($request);
        return View('labSection@operationContainer::getAllDoctorSkill', ['result' => $result]);
    }
}
