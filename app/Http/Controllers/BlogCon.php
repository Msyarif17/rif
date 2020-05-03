<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCon extends Controller
{
    public function home()
    {
        return view('home');
    }
}
