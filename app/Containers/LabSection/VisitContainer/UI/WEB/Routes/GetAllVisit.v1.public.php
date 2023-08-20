<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\GetAllVisitController;
use Illuminate\Support\Facades\Route;

Route::get('patient/visit', [GetAllVisitController::class, 'run']);
//    ->middleware(['auth:web']);

