<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\pages\GetStartedController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\QuizNoteController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('get-started', [GetStartedController::class, 'index'])->name('get-started');
Route::get('quiz-note', [QuizNoteController::class, 'index'])->name('quiz-note');

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('auth.login');
    Route::get('register', [RegisterController::class, 'index'])->name('auth.register');
    Route::get('register/confirm', [RegisterController::class, 'confirm'])->name('auth.confirm');
});
