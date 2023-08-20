<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\GetAllDoctorOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/doctor/get', [GetAllDoctorOperationController::class, 'run']);
//    ->middleware(['auth:web']);

