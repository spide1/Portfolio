<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Home;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class HomeController extends Controller
{
    public function login()
    {
        return view('home.login');
    }
    public function show()
    {
        $users = User::all();
        return view('home.index',compact('users'));
    }
    public function edit($id)
    {
        $home = Home::find($id);
        $about = About::find($id);
        $services = Service::find($id);
        $contact = Contact::find($id);

        return view('home.edit', compact('home', 'about', 'services', 'contact'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $user = Home::findOrFail($id);
        $user->delete();

        $user = About::findOrFail($id);
        $user->delete();

        $user = Service::findOrFail($id);
        $user->delete();

        $user = Contact::findOrFail($id);
        $user->delete();

        return redirect()->route('home.index')->with('success', 'User deleted successfully.');
    }
    public function create()
    {
        return view('home.create');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index')->with('success', 'Login Success');
        }
        
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }


    // public function authenticate(Request $request)
    // {
    //     $email = $request->post('email');
    //     $password = $request->post('password');
        
    //     // Assuming you have hashed passwords stored in the database
    //     $user = User::where('email', $email)->first();
    
    //     if ($user && Hash::check($password, $user->password)) {
    //         $request->session()->put('log', true);
    //         return redirect()->route('home.index');
    //     } else {
    //         // Handle authentication failure (e.g., redirect back with an error message)
    //         return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    //     }
    //     return back()->withErrors('error', 'Invalid Email or Password');
    // }

    // public function index()
    // {
    //     return view('home.index');
    // }

    
}