<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\SignoutAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/signout', [SignoutAdminController::class, 'run']);
//    ->middleware(['auth:web']);

