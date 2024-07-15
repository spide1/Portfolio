<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function home()
    {
        return view('home.login');
    }

    public function create()
    {
        return view('home.create');
    }

    public function index() 
    {
        $users = User::all();
        return view('home.index', compact('users'));
    }

    public function upload(Request $request)
    {
        $file = $request->file('image');

        // Validate and store the file
        $fileName = $file->getClientOriginalName();
        $file->storeAs('images', $fileName); // Store in storage/app/images directory

        // Optionally, save file information to database
        // $image = new Image();
        // $image->filename = $fileName;
        // $image->save();

        return back()->with('success', 'File uploaded successfully.');
}

}