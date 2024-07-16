
<link rel="stylesheet" href="<?php echo asset(
        "home/view.css"
    ); ?>" type="text/css">

<body>
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
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
});

</script>
