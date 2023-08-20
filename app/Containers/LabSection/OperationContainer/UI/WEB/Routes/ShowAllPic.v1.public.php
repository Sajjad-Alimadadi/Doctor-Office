<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\ShowAllPicController;
use Illuminate\Support\Facades\Route;

Route::get('/show/{id}', [ShowAllPicController::class, 'run']);
//    ->middleware(['auth:web']);

