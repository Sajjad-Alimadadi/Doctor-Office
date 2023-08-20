<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\GetAllNewsAdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin/news', [GetAllNewsAdminController::class, 'run']);
//    ->middleware(['auth:web']);

