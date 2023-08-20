<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\SignoutDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/doctor/signout', [SignoutDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

