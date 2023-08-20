<?php

use App\Containers\LabSection\DoctorContainer\UI\WEB\Controllers\LoginDoctorController;
use Illuminate\Support\Facades\Route;
use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\LoginAdminController;

Route::get('/admin/login', [LoginAdminController::class, 'run']);
//    ->middleware(['auth:web']);

