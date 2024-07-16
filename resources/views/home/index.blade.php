<link rel="stylesheet" href="<?php echo asset(
        "home/index.css"
    ); ?>" type="text/css">

<main>
@include('layouts.sidebar')
@include('layouts.nav')
    <h1>Users List</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <a href="{{ route('home.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('delete', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</main>
