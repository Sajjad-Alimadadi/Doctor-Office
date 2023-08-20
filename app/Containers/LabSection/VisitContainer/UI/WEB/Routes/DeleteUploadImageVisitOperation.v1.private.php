<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\DeleteUploadImageVisitOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/visit/upload/delete/{id}', [DeleteUploadImageVisitOperationController::class, 'run']);
//    ->middleware(['auth:web']);

