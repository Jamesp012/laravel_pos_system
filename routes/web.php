<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard'); // Assuming you have a "dashboard.blade.php" view
})->name('dashboard');
