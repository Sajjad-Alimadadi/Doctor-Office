<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\SignupDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/doctor/signup', [SignupDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

