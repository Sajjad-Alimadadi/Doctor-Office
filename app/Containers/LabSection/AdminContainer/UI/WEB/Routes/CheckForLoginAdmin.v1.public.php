<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\CheckForLoginAdminController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/login/check', [CheckForLoginAdminController::class, 'run']);
//    ->middleware(['auth:web']);

