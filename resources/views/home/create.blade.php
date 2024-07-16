<link rel="stylesheet" href="<?php echo asset('home/create.css'); ?>" type="text/css">

<div class="create-page">
    @include('layouts.sidebar')
    @include('layouts.nav')

    <h4 class="Create-heading">Create new user!</h4>

    <div class="create-navbar">
        <ul>
            <li data-section="home-section" class="active">Home</li>
            <li data-section="about-section">About</li>
            <li data-section="services-section">Services</li>
            <li data-section="contact-section">Contact</li>
        </ul>
    </div>

    <form action="/upload" method="post" enctype="multipart/form-data" class="create-form">
        @csrf

        <div id="home-section" class="form-section active">
            <h5 class="page-headings">Home Page Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-home">
                        <img id="image-preview-home" src="{{ asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-home" type="file" multiple="multiple" name="image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-home')">
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
            <h5 class="page-headings">About Page Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-about">
                        <img id="image-preview-about" src="{{ asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-about" type="file" multiple="multiple" name="image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-about')">
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
            <h5 class="page-headings">Services Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-services">
                        <img id="image-preview-services" src="{{ asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-services" type="file" multiple="multiple" name="image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-services')">
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
            <h5 class="page-headings">Contact Details-</h5>
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
                            <label for="heading" class="label">☎️ Phone No 1</label>
                        </div>
                        <div class="form-inputs">
                            <input type="number" name="heading" class="home-heading input phone" placeholder=" ">
                            <label for="heading" class="label">☎️ Phone No 2</label>
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
                        <label for="heading" class="label">🌎 Location</label>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit">Save</button>
    </form>
</div>

<script>
function previewImage(event, previewId) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById(previewId);
            preview.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.create-navbar li');
    const formSections = document.querySelectorAll('.form-section');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navItems.forEach(nav => nav.classList.remove('active'));
            this.classList.add('active');

            const sectionId = this.getAttribute('data-section');
            formSections.forEach(section => {
                if (section.id === sectionId) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        });
    });
});
</script>
