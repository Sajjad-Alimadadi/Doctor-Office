<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\SignupPatientController;
use Illuminate\Support\Facades\Route;

Route::get('/patient/signup', [SignupPatientController::class, 'run']);
//    ->middleware(['auth:web']);

