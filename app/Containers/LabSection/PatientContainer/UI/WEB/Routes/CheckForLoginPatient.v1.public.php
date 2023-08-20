<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\CheckForLoginPatientController;
use Illuminate\Support\Facades\Route;

Route::Post('/patient/login/check', [CheckForLoginPatientController::class, 'run']);
//    ->middleware(['auth:web']);

