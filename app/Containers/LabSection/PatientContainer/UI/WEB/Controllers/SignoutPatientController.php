<?php

namespace App\Containers\LabSection\PatientContainer\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use Artisan;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class SignoutPatientController extends WebController
{
    public function run(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        //Clear route cache

        Artisan::call('route:cache');


        //Clear config cache

        Artisan::call('config:cache');


        // Clear application cache

        Artisan::call('cache:clear');


        // Clear view cache

        Artisan::call('view:clear');


        // Clear cache using reoptimized class

        Artisan::call('optimize:clear');

        return View('labSection@patientContainer::signoutPatient');
    }
}
