<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo asset('home/create.css'); ?>" type="text/css">
</head>
<body>
<div class="create-page">
    @include('home.sidebar')
    @include('home.navbar')

    <h4 class="Create-heading">Create new user!</h4>

    <div class="create-navbar">
        <ul>
            <li data-section="user-section" class="active">User</li>
            <li data-section="home-section">Home</li>
            <li data-section="about-section">About</li>
            <li data-section="services-section">Services</li>
            <li data-section="contact-section">Contact</li>
        </ul>
    </div>

    <form action="/upload" method="post" enctype="multipart/form-data" class="create-form">
        @csrf

        <div id="user-section" class="form-section active">
            <div class="user-data">
                <div class="user-inputs">
                    <div class="form-inputs">
                        <input type="text" name="name" class="user-input input" placeholder=" ">
                        <label for="name" class="label">Name</label>
                    </div>
                    <div class="form-inputs">
                        <input type="email" name="email" class="user-input input" placeholder=" ">
                        <label for="email" class="label">Email</label>
                    </div>
                </div>
                
                <div class="user-inputs">
                    <div class="form-inputs">
                        <input type="password" name="password" class="user-input input" placeholder=" ">
                        <label for="password" class="label">Password</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="role" class="user-input input" placeholder=" ">
                        <label for="role" class="label">Role</label>
                    </div>
                </div>
            </div>
        </div>


        <div id="home-section" class="form-section">
            <div class="home-data">
                <div class="image-gallery" id="home-image-gallery">
                    <label for="home-image-input" class="add-image">+</label>
                    <input type="file" id="home-image-input" class="section-image-input" accept="image/*" style="display: none;" multiple>
                </div>

                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="heading" class="home-heading input" placeholder=" ">
                        <label for="heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="sub-heading" class="home-heading input" placeholder=" ">
                        <label for="sub-heading" class="label">Sub-Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="description" class="home-description input" placeholder=" ">
                        <label for="description" class="label">Description</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="about-section" class="form-section">
            <div class="home-data">
                <<div class="image-gallery" id="about-image-gallery">
                    <label for="about-image-input" class="add-image">+</label>
                    <input type="file" id="about-image-input" class="section-image-input" accept="image/*" multiple>
                </div>
                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="heading" class="home-heading input" placeholder=" ">
                        <label for="heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="highlight" class="home-heading input" placeholder=" ">
                        <label for="highlight" class="label">Highlight</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="description" class="home-description input" placeholder=" ">
                        <label for="description" class="label">Description</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-section" class="form-section">
            <div class="home-data">
                <div class="image-gallery" id="image-gallery">
                    <label for="image-input" class="add-image">+</label>
                    <input type="file" id="service-image-input" class="section-image-input" accept="image/*" multiple>
                </div>
                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="heading" class="home-heading input" placeholder=" ">
                        <label for="heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="description" class="home-description input" placeholder=" ">
                        <label for="description" class="label">Description</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-section" class="form-section">
            <div class="content-data">
                <div id="home-content-data">
                    <div class="contact-form-section">
                        <div class="form-inputs">
                            <input type="email" name="heading" class="home-heading input" placeholder=" ">
                            <label for="heading" class="label">E-Mail</label>
                        </div>
                        <div class="form-inputs">
                            <input type="text" name="heading" class="home-heading input" placeholder=" ">
                            <label for="heading" class="label">Address</label>
                        </div>
                    </div>
                    <div class="contact-form-section">
                        <div class="form-inputs">
                            <input type="number" name="heading" class="home-heading input phone" placeholder=" ">
                            <label for="heading" class="label">Phone No 1</label>
                        </div>
                        <div class="form-inputs">
                            <input type="number" name="heading" class="home-heading input phone" placeholder=" ">
                            <label for="heading" class="label">Phone No 2</label>
                        </div>
                    </div>
                    <div class="contact-form-section">
                        <div class="form-inputs">
                            <input type="text" name="heading" class="home-heading input" placeholder=" ">
                            <label for="heading" class="label">Facebook link</label>
                        </div>
                        <div class="form-inputs">
                            <input type="text" name="heading" class="home-heading input" placeholder=" ">
                            <label for="heading" class="label">Instagram link</label>
                        </div>
                    </div>
                    <div class="form-inputs location">
                        <input type="text" name="heading" class="home-heading input" placeholder=" ">
                        <label for="heading" class="label">Location</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="save-button">
            <button type="submit">Save</button>
        </div>
    </form>
</div>

@include('home.footer')
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Navigation functionality
    const navItems = document.querySelectorAll('.create-navbar li');
    const formSections = document.querySelectorAll('.form-section');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove 'active' class from all nav items
            navItems.forEach(navItem => navItem.classList.remove('active'));

            // Add 'active' class to the clicked nav item
            this.classList.add('active');

            // Get target section id from data-section attribute
            const targetSectionId = this.getAttribute('data-section');
            const targetSection = document.getElementById(targetSectionId);

            // Remove 'active' class from all form sections
            formSections.forEach(section => section.classList.remove('active'));

            // Add 'active' class to the target form section
            targetSection.classList.add('active');
        });
    });

    // Image upload functionality
    const imageInputs = document.querySelectorAll('.section-image-input');

    imageInputs.forEach(imageInput => {
        const imageGallery = imageInput.closest('.image-gallery');
        const addImageLabel = imageGallery.querySelector('.add-image');

        imageInput.addEventListener('change', function(event) {
            const files = event.target.files;
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imageContainer = document.createElement('div');
                    imageContainer.className = 'image-container';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    imageContainer.appendChild(img);

                    const removeButton = document.createElement('button');
                    removeButton.className = 'remove-image';
                    removeButton.innerHTML = '×';
                    removeButton.addEventListener('click', function() {
                        imageGallery.removeChild(imageContainer);
                        updateImageSizes(imageGallery);
                    });
                    imageContainer.appendChild(removeButton);

                    imageGallery.insertBefore(imageContainer, addImageLabel);
                    updateImageSizes(imageGallery);
                }

                reader.readAsDataURL(file);
            }
        });
    });

    function updateImageSizes(gallery) {
    const images = gallery.querySelectorAll('.image-container');
    const imageCount = images.length;
    const size = '100px'; // Fixed size for all images

    images.forEach(image => {
        image.style.width = size;
        image.style.height = size;
    });

    // Update the add-image button size
    const addImageButton = gallery.querySelector('.add-image');
    if (addImageButton) {
        addImageButton.style.width = size;
        addImageButton.style.height = size;
    }
}

    // Initial call to set the correct size for the add buttons
    document.querySelectorAll('.image-gallery').forEach(updateImageSizes);
});
</script>
</html>
