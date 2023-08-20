<?php

namespace App\Containers\LabSection\PatientContainer\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class DashboardPatientController extends WebController
{
    public function run()
    {
        return View('labSection@patientContainer::dashboardPatient');
    }
}
