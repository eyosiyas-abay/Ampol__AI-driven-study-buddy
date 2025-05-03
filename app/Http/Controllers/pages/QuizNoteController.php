<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

class QuizNoteController extends Controller
{
    public function index()
    {
        return view('pages.quiz-note');
    }
}
