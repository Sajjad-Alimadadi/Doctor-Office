<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\GetAllOperationServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/service', [GetAllOperationServiceController::class, 'run']);
//    ->middleware(['auth:web']);

