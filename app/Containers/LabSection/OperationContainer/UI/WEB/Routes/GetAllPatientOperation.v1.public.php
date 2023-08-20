<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\GetAllPatientOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/patient/get', [GetAllPatientOperationController::class, 'run']);
//    ->middleware(['auth:web']);

