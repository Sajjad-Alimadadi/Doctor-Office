<?php


use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\CheckForLoginOperationController;
use Illuminate\Support\Facades\Route;

Route::Post('/operation/login/check', [CheckForLoginOperationController::class, 'run']);
//    ->middleware(['auth:web']);

