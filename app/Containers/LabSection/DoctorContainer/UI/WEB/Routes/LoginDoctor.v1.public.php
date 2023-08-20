<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\LoginDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/doctor/login', [LoginDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

