<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\pages\GetStartedController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\QuizNoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('get-started', [GetStartedController::class, 'index'])->name('get-started');
Route::get('quiz-note', [QuizNoteController::class, 'index'])->name('quiz-note');

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('auth.login');
    Route::get('register', [RegisterController::class, 'index'])->name('auth.register');
});

Route::prefix('email/verify')->group(function () {
    Route::get('', [RegisterController::class, 'confirm'])->name('verification.notice');
    Route::get('{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');
});

Route::get('/mail', function () {
    return view('mail');
});
