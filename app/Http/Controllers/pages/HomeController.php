<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
