<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// ==================1==================
// Add a GET route to /dashboard that calls the index() method from DashboardController
Route::get('/dashboard', [DashboardController::class, 'index']);