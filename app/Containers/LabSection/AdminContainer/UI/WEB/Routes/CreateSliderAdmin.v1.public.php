<?php

use App\Containers\LabSection\AdminContainer\UI\WEB\Controllers\CreateSliderAdminController;
use Illuminate\Support\Facades\Route;

Route::post('admin/slider/create', [CreateSliderAdminController::class, 'run']);
//    ->middleware(['auth:web']);

