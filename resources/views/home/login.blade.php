<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="{{ asset('home/login.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <div id="create">
        <h1>Admin Log In</h1>

        <form class="form" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="field">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder=" ">
                <label for="email">Email</label>
            </div>
            <div class="field">
                <input type="password" id="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>
            <button type="submit">Log In</button>
        </form>

        @if ($errors->any())
            <div class="login-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>
