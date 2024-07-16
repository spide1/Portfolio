<link rel="stylesheet" href="<?php echo asset(
        "home/navbar.css"
    ); ?>" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<nav>
    <div class="container" onclick="myFunction(this)" id="toggleSidebar">
        <div class="bar1"></div>
        <div class="bar2"></div>   
        <div class="bar3"></div> 
    </div>

    <div class="admin-profile">
        <img src="{{ asset('home/adminPhoto.png') }}" alt="tag">

        <span>
            <p>Admin-Name</p>

            <div class="logout">Log Out</div>
        </span>
    </div>
</nav>

<script>
function myFunction(x) {
  x.classList.toggle("change");
}

document.addEventListener('DOMContentLoaded', function() {
    const adminProfile = document.querySelector('.admin-profile');
    if (adminProfile) {
        adminProfile.addEventListener('click', function() {
            this.querySelector('span').classList.toggle('show');
        });
    }
});
</script>