<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function services()
    {
        return view('navigation.services');
    }

    public function aboutus()
    {
        return view('navigation.about');
    }
}
