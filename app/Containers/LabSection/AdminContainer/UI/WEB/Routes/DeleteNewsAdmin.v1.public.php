<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\DeleteNewsAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/news/delete/{id}', [DeleteNewsAdminController::class, 'run']);
//    ->middleware(['auth:web']);

