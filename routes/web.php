<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/get-started', function () {
    return view('pages.get-started');
})->name('get-started');

Route::get('/quiz-note', function () {
    return view('pages.quiz-note');
})->name('quiz-note');
