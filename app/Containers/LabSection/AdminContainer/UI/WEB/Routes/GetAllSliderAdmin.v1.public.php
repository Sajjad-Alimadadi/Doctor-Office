<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\GetAllSliderAdminController;
use Illuminate\Support\Facades\Route;

Route::get('admin/slider', [GetAllSliderAdminController::class, 'run']);
//    ->middleware(['auth:web']);

