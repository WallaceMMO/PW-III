<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

// Website

Route::get('/', [GeneralController::class, 'dashboardView'])->name('dashboard');
Route::get('/detail/{id}', [GeneralController::class, 'detailView'])->name('detail');

// Admin

Route::get('/create-category', [GeneralController::class, 'categoryView']);
Route::get('/create-technicality', [GeneralController::class, 'technicalityView']);
Route::post('/create-category', [GeneralController::class, 'createCategory']);
Route::post('/create-technicality', [GeneralController::class, 'createTechnicality']);