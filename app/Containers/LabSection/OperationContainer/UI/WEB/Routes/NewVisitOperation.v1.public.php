<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\NewVisitOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/visit', [NewVisitOperationController::class, 'run']);
//    ->middleware(['auth:web']);

