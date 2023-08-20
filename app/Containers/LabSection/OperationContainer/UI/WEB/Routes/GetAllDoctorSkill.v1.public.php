<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\GetAllDoctorSkillController;
use Illuminate\Support\Facades\Route;

Route::get('operation/skill', [GetAllDoctorSkillController::class, 'run']);
//    ->middleware(['auth:web']);

