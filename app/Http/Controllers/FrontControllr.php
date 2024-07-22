<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Time_Date;
use App\Models\About;
use App\Models\background_image;
use App\Models\Service;
use App\Models\Footer;
use Illuminate\Http\Request;

class FrontControllr extends Controller
{
    public function front()
    {
        $homeData = Home::with('user')->get();
        $headers = Time_Date::all();
        $abouts = About::all();
        $bgimage = background_image::all();
        $service = Service::all();
        $footer = Footer::all();
        return view('frontend.index', compact('homeData','headers','abouts','bgimage','service','footer'));
    }

    


    

    // public function index()
    // {
    //     $homeData = Home::with('user')->get();
    //     return view('frontend.index', compact('homeData'));
    // }
}
