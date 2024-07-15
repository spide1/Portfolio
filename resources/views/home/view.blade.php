<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo asset(
        "home/view.css"
    ); ?>" type="text/css">
</head>
<body>
    @include('home.sidebar')
    <div id="main-content">
        @if (Request::is('admin/create'))
            @include('home.create')
        @elseif (Request::is('admin/index'))
            @include('home.index')
        @else
            <p>Page not found</p>
        @endif
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleSidebar');
    const sidebar = document.querySelector('.side-bar');

    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('active'); // 'active' is the class to be added or removed
    });
});

</script>
</html>