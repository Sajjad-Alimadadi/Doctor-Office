<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\DashboardOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/dashboard', [DashboardOperationController::class, 'run']);
//    ->middleware(['auth:web']);

