<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\UpdateNewPassController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/newpass', [UpdateNewPassController::class, 'run']);
//    ->middleware(['auth:web']);

