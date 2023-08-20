<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\DeleteOperationAdminController;
use Illuminate\Support\Facades\Route;
Route::get('/admin/operation/get/delete/{id}', [DeleteOperationAdminController::class, 'run']);
//    ->middleware(['auth:web']);

