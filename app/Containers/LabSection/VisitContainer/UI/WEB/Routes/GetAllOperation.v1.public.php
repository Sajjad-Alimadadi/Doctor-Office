<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\GetAllVisitOperationController;
use Illuminate\Support\Facades\Route;

Route::get('operation/visit/get', [GetAllVisitOperationController::class, 'run']);
//    ->middleware(['auth:web']);

