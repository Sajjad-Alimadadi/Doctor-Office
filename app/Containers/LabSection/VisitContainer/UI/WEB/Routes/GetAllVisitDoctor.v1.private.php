<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\GetAllVisitDoctorController;
use Illuminate\Support\Facades\Route;

Route::get('doctor/visit/get', [GetAllVisitDoctorController::class, 'run']);
//    ->middleware(['auth:web']);

