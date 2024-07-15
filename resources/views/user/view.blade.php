@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Role:</strong> {{ $user->role->name }}</p>
            </div>
        </div>
        
        <div class="mt-3">
            @can('edit users')
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
            @endcan
            
            @can('delete users')
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete User</button>
                </form>
            @endcan
        </div>
    </div>
@endsection
