<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\CreateDoctorSkillController;
use Illuminate\Support\Facades\Route;

Route::Post('/operation/skill/create', [CreateDoctorSkillController::class, 'run']);
//    ->middleware(['auth:web']);

