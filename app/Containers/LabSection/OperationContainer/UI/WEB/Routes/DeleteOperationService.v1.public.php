<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\DeleteOperationServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/service/delete/{id}', [DeleteOperationServiceController::class, 'run']);
//    ->middleware(['auth:web']);

