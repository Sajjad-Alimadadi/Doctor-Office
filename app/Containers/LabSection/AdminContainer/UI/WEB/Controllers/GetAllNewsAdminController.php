<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\GetAllNewsAdminAction;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\GetAllNewsAdminRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllNewsAdminController extends WebController
{
    public function run(GetAllNewsAdminRequest $request): View|Factory|Application
    {
        $result = app(GetAllNewsAdminAction::class)->run();
        return View('labSection@adminContainer::getAllNewsAdmin', ['result' => $result]);
    }
}
