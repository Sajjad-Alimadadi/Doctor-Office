<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\CreateNewsAdminController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/news/create', [CreateNewsAdminController::class, 'run']);
//    ->middleware(['auth:web']);

