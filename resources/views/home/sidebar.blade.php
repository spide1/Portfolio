<link rel="stylesheet" href="<?php echo asset(
        "home/sidebar.css"
    ); ?>" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<div class="side-bar" id="sidebar">
    <div class="side-bar-name">
        <h1>Ecotence</h1>
    </div>

    <div class="side-bar-list">
        <button class="side-bar-list-options">
            <p class="list-option-icons">&#x2b;</p>

            <a href="{{ url('/admin/create') }}">Create</a>
        </button>

        <button class="side-bar-list-options">
            <p class="list-option-icons">&#x270E;</p>

            
        </button>

        <button class="side-bar-list-options">
            <p class="list-option-icons">&#x2635;</p>

            <a href="{{ url('/admin/index') }}">Create</a>
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
});
</script>