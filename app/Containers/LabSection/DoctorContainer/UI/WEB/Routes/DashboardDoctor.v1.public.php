<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\DashboardDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/doctor/dashboard', [DashboardDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

