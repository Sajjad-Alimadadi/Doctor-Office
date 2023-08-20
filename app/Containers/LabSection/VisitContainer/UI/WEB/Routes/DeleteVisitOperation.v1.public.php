<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\DeleteVisitOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/visit/delete/{id}', [DeleteVisitOperationController::class, 'run']);
//    ->middleware(['auth:web']);

