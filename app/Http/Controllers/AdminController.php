<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Home;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
   

    public function create()
    {
        return view('home.create');
    }

    public function edit($id)
    {
        $home = Home::find($id);
        $about = About::find($id);
        $services = Service::find($id);
        $contact = Contact::find($id);

        return view('home.edit', compact('home', 'about', 'services', 'contact'));
    }

    public function index() 
    {
        $users = User::all();
        return view('home.index', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $home = Home::find($id);
        $about = About::find($id);
        $services = Service::find($id);
        $contact = Contact::find($id);

        $home->update($request->only(['heading', 'sub-heading', 'description']));
        $about->update($request->only(['heading', 'highlight', 'description']));
        $services->update($request->only(['heading', 'description']));
        $contact->update($request->only(['email', 'address', 'phone1', 'phone2', 'facebook', 'instagram', 'location']));

        return redirect()->route('edit', $id)->with('success', 'Data updated successfully');
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

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }


}