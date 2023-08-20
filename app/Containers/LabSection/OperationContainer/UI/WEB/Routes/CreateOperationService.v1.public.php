<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\CreateOperationServiceController;
use Illuminate\Support\Facades\Route;

Route::Post('/operation/service/create', [CreateOperationServiceController::class, 'run']);
//    ->middleware(['auth:web']);

