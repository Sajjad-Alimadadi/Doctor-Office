<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\SignoutOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/signout', [SignoutOperationController::class, 'run']);
//    ->middleware(['auth:web']);

