<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function news()
    {
        return view('news');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function apply()
    {
        return view('apply');
    }

    public function contact()
    {
        return view('contact');
    }

    public function detailsNews($slug)
    {
        return view('details-news');
    }

    public function spanishLevels()
    {
        return view('spanishlevels');
    }
     public function dash()
    {
        return view('admin.index');
    }
}
