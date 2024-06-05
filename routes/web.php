<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('view_counter', 'view_counter')
    ->middleware(['auth'])
    ->name('counter');

Route::view('post', 'post.view')
    ->middleware(['auth'])
    ->name('post');

require __DIR__.'/auth.php';
