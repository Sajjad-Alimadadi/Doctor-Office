<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\GetAllOperationAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/operation/get', [GetAllOperationAdminController::class, 'run']);
//    ->middleware(['auth:web']);

