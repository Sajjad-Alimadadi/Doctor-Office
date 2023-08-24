<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\UpdateOperationController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/operation/update', [UpdateOperationController::class, 'run']);
//    ->middleware(['auth:web']);

