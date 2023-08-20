<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\DashboardPatientController;
use Illuminate\Support\Facades\Route;

Route::get('/patient/dashboard', [DashboardPatientController::class, 'run']);
//    ->middleware(['auth:web']);

