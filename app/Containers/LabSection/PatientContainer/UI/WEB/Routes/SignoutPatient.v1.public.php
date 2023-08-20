<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\SignoutPatientController;
use Illuminate\Support\Facades\Route;

Route::get('/patient/signout', [SignoutPatientController::class, 'run']);
//    ->middleware(['auth:web']);

