<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

// Website

Route::get('/', [GeneralController::class, 'dashboardView'])->name('dashboard');
Route::get('/detail/{id}', [GeneralController::class, 'detailView'])->name('detail');

// Admin

Route::get('/create', [GeneralController::class, 'createView']);
Route::post('/create', [GeneralController::class, 'create']);