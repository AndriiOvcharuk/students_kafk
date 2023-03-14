<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage()
    {
        return view('home');
    }

    public function getAboutUsPage()
    {
        return view('about_us');
    }
}
