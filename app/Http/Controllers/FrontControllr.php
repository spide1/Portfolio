<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class FrontControllr extends Controller
{
    public function front()
    {
        $homeData = Home::with('user')->get();
        return view('frontend.index', compact('homeData'));
    }

    // public function index()
    // {
    //     $homeData = Home::with('user')->get();
    //     return view('frontend.index', compact('homeData'));
    // }
}
