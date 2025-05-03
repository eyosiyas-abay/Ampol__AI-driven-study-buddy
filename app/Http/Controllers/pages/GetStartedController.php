<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;

class GetStartedController extends Controller
{
    public function index()
    {
        return view('pages.get-started');
    }
}
