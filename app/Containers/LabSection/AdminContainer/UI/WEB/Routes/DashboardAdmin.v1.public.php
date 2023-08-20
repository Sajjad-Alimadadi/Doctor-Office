<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [DashboardAdminController::class, 'run']);
//    ->middleware(['auth:web']);

