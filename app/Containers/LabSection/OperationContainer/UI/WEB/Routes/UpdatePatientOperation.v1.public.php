<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\UpdatePatientOperationController;
use Illuminate\Support\Facades\Route;

Route::post('/operation/patient/update', [UpdatePatientOperationController::class, 'run']);
//    ->middleware(['auth:web']);

