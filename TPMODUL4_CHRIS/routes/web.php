<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// 1. Display list of users
Route::get('/users/index', [UserController::class, 'index'])->name('users.index');

// 2. Display add user form
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// 3. Store new user
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// 4. Display edit user form
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// 5. Save user changes
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

// 6. Delete a user
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

