<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ==================1==================
// Add a GET route to /profile that calls the index() method from StudentController
Route::get('/profile', [StudentController::class, 'index'])->name('profile');