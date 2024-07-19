<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Time_Date;
use App\Models\About;
use Illuminate\Http\Request;

class FrontControllr extends Controller
{
    public function front()
    {
        $homeData = Home::with('user')->get();
        $headers = Time_Date::all();
        $abouts = About::all();
        return view('frontend.index', compact('homeData','headers','abouts'));
    }

    // public function index()
    // {
    //     $homeData = Home::with('user')->get();
    //     return view('frontend.index', compact('homeData'));
    // }
}
