<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\DeletePatientOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/patient/get/delete/{id}', [DeletePatientOperationController::class, 'run']);
//    ->middleware(['auth:web']);

