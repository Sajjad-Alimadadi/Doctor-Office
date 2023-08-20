<?php

use App\Containers\LabSection\PatientContainer\UI\WEB\Controllers\LoginPatientController;
use Illuminate\Support\Facades\Route;

Route::get('/patient/login', [LoginPatientController::class, 'run'])->name('patientLogin');
//    ->middleware(['auth:web']);

