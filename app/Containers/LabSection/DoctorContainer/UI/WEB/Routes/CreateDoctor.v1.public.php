<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\CreateDoctorController;
use Illuminate\Support\Facades\Route;

Route::Post('/doctor/create', [CreateDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

