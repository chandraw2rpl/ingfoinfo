<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function index()
    {
        return view('webpage.index');
    }
    public function article()
    {
        return view('webpage.article');
    }
    public function privacy()
    {
        return view('webpage.privacy');
    }
    public function terms()
    {
        return view('webpage.terms');
    }
    public function profile()
    {
        return view('webpage.profile');
    }
}
