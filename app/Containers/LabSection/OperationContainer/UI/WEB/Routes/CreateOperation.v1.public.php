<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\CreateOperationController;
use Illuminate\Support\Facades\Route;

Route::Post('/operation/create', [CreateOperationController::class, 'run']);
//    ->middleware(['auth:web']);

