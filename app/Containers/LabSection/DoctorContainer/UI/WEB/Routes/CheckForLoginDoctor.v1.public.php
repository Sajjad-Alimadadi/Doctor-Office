<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\CheckForLoginDoctorController;
use Illuminate\Support\Facades\Route;

Route::Post('/doctor/login/check', [CheckForLoginDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

