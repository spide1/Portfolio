<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendCrontroller extends Controller
{
    public function home()
    {
        return view('frontend.view');
    }
}
