<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\SignupOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/signup', [SignupOperationController::class, 'run']);
//    ->middleware(['auth:web']);

