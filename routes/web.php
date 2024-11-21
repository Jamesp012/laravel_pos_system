<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;


// Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Register Route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Logout Route
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Login Route
Route::get('/', function() {
    return view('index');
});

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->middleware('auth');

// Data Tables Route

// Read 
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/data', [UserController::class, 'getData'])->name('users.data');

// Delete
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// Edit
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');