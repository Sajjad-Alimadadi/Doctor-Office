<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\UpdateDoctorOperationController;
use Illuminate\Support\Facades\Route;

Route::post('/operation/doctor/update', [UpdateDoctorOperationController::class, 'run']);
//    ->middleware(['auth:web']);

