<?php

use App\Containers\LabSection\VisitContainer\UI\WEB\Controllers\UploadImageVisitOperationController;
use Illuminate\Support\Facades\Route;

Route::get('operation/visit/upload/{visit_id}', [UploadImageVisitOperationController::class, 'run']);
//    ->middleware(['auth:web']);

