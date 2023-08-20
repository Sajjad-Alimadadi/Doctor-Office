<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\CreatePatientController;
use Illuminate\Support\Facades\Route;

Route::Post('/patient/create', [CreatePatientController::class, 'run']);
//    ->middleware(['auth:web']);

