<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\DeleteDoctorOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/doctor/get/delete/{id}', [DeleteDoctorOperationController::class, 'run']);
//    ->middleware(['auth:web']);

