<?php

use App\Containers\LabSection\SiteContainer\UI\WEB\Controllers\IndexSiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexSiteController::class, 'run']);
//    ->middleware(['auth:web']);

