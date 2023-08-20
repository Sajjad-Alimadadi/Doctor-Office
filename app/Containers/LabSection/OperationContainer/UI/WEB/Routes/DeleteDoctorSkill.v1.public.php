<?php

use App\Containers\LabSection\OperationContainer\UI\WEB\Controllers\DeleteDoctorSkillController;
use Illuminate\Support\Facades\Route;

Route::get('/operation/skill/delete/{id}', [DeleteDoctorSkillController::class, 'run']);
//    ->middleware(['auth:web']);

