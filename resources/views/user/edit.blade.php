@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit User</h1>
        
        @can('update user')
        <div class="mb-3">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                
                <div class="form-group">
                    <label for="role">Role</label>
                    <select id="role" name="role_id" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
        @endcan
    </div>
@endsection
