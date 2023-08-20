<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\DeleteSliderAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/slider/delete/{id}', [DeleteSliderAdminController::class, 'run']);
//    ->middleware(['auth:web']);

