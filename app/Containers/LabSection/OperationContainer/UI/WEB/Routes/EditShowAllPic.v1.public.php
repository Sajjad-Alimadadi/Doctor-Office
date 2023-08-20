<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\EditShowAllPicController;
use Illuminate\Support\Facades\Route;

Route::get('/show/{hash}/{id}', [EditShowAllPicController::class, 'run']);
//    ->middleware(['auth:web']);

