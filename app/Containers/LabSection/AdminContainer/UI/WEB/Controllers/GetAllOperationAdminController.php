<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\GetAllOperationAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\GetAllOperationAdminRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllOperationAdminController extends WebController
{
    public function run(GetAllOperationAdminRequest $request): View|Factory|Application
    {
        $result = app(GetAllOperationAdminAction::class)->run($request);
        return View('labSection@adminContainer::getAllOperationAdmin', ['result' => $result]);
    }
}
