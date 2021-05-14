<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'splashView'])->name('splash');
Route::get('/dashboard', [GeneralController::class, 'dashboardView'])->name('dashboard');