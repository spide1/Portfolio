

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Note</title>

    <link rel="stylesheet" href="<?php echo asset(
        "home/login.css"
    ); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="create">
        <h1>Admin Log In</h1>

        <form class="form" action="{{ route('home.authenticate') }}" method="POST">
            @csrf

            <div class="field">
                <input type="email" id="title" name="title" value="{{ old('title') }}" required placeholder=" ">
                <label for="title">Email</label>
            </div>
            <div class="field">
                <input type="password" id="content" name="content" value="{{ old('content') }}" required placeholder=" ">
                <label for="content">Password</label>
            </div>
            <button type="submit">Log In</button>
        </form>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

</body>
</html>
