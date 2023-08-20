<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\CreateVisitController;
use Illuminate\Support\Facades\Route;

Route::Post('/visit/create', [CreateVisitController::class, 'run']);
//    ->middleware(['auth:web']);

