<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\SendSMSController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/sms/{visit_id}/{type}', [SendSMSController::class, 'run']);
//    ->middleware(['auth:web']);

