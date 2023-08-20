<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\DeleteVisitAttachOperationController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/visit/delete/attach/{id}', [DeleteVisitAttachOperationController::class, 'run']);
//    ->middleware(['auth:web']);

