<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\CreateVisitImageController;
use Illuminate\Support\Facades\Route;

Route::Post('/visit-image/create/{visit_id}', [CreateVisitImageController::class, 'run']);
//    ->middleware(['auth:web']);

