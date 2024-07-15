<link rel="stylesheet" href="<?php echo asset(
        "home/index.css"
    ); ?>" type="text/css">

<div class="index">
@include('home.navbar')

    <div id="main-content">
        <h1>User List</h1>
        <div class="user-list">
            @if($users->isEmpty())
                <p>No users found.</p>
            @else
                <ul>
                    @foreach($users as $user)
                        <li>
                            <div class="index-user-detail">
                                {{ $user->name }} - {{ $user->email }}
                            </div>

                            <div class="index-edit-button">
                                <button id="edit">Edit</button>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>