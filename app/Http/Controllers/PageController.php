<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function androidCallback()
    {
        return view('android-callback');
    }
}
