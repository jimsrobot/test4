<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('homepage');
\\ new comment added

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
