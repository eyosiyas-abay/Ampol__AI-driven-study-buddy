<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\pages\GetStartedController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\QuizNoteController;
use App\Http\Requests\VerifyRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('get-started', [GetStartedController::class, 'index'])->name('get-started');
    Route::get('quiz-note', [QuizNoteController::class, 'index'])->name('quiz-note');
    Route::get('verified', fn() => view('pages.auth.verified'))->name('verification.verified');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('auth.logout');
    Route::get('verification-sent', fn() => view('pages.auth.verification-sent'))->name('verification.sent');
});

Route::prefix('email/verify')->group(function () {
    Route::get('', [RegisterController::class, 'confirm'])->name('verification.notice');
    Route::get('{id}/{hash}', function (VerifyRequest $request) {
        $user = $request->user();
        $request->fulfill();
        Auth::login($user);
        return redirect()->route('verification.verified');
    })->middleware(['signed'])->name('verification.verify');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'zh', 'am', 'ar', 'hi', 'es'])) {
        Session::put('locale', $locale);
    }

    return redirect()->back();
})->name('language.switch');
