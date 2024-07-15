<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users
        $users = User::all();
        return view('user.create', compact('users'));
    }

    public function show(User $user)
    {
        // Show details of a specific user
        return view('user.show', compact('user'));
    }

    public function create()
    {
        // Show form to create a new user
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Validate and store new user
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('user.create')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        // Show form to edit an existing user
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validate and update user details
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role_id' => 'required|exists:roles,id'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        // Delete user
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
