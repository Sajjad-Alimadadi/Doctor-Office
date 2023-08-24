<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\EditShowAllPicOldController;
use Illuminate\Support\Facades\Route;

Route::get('/show-old/{hash}/{id}', [EditShowAllPicOldController::class, 'run']);
//    ->middleware(['auth:web']);

