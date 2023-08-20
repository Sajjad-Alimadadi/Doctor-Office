<?php

namespace App\Containers\LabSection\AdminContainer\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class LoginAdminController extends WebController
{
    public function run(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return View('labSection@adminContainer::loginAdmin');
    }
}
