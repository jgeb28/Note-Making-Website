<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/submit', [LoginController::class, 'submit'])->name('login.submit');
Route::get('/login/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register/submit', [RegisterController::class, 'submit'] )->name('register.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('note', NoteController::class);
});


