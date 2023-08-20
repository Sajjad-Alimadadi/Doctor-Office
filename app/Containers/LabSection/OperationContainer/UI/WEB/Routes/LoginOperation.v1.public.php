<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\LoginOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/login', [LoginOperationController::class, 'run']);
//    ->middleware(['auth:web']);

