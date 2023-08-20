<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Containers\LabSection\AdminContainer\Actions\GetAllSliderActionAdmin;
use App\Containers\LabSection\AdminContainer\UI\WEB\Requests\GetAllSliderAdminRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class GetAllSliderAdminController extends WebController
{
    public function run(GetAllSliderAdminRequest $request): View|Factory|Application
    {
        $result = app(GetAllSliderActionAdmin::class)->run($request);
        return View('labSection@adminContainer::getAllSliderAdmin', ['result' => $result]);
    }
}
