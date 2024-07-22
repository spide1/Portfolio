
@section('content')
<div class="create-page">
    @include('layouts.sidebar')
    @include('layouts.nav')

    <h4 class="Create-heading">Edit Page Details</h4>

    <div class="create-navbar">
        <ul>
            <li data-section="home-section" class="active">Home</li>
            <li data-section="about-section">About</li>
            <li data-section="services-section">Services</li>
            <li data-section="contact-section">Contact</li>
        </ul>
    </div>

    <form action="{{ route('update', $home->id) }}" method="post" enctype="multipart/form-data" class="create-form">
        @csrf
        @method('PUT')

        <div id="home-section" class="form-section active">
            <h5 class="page-headings">Home Page Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-home">
                        <img id="image-preview-home" src="{{ $home->image ?? asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-home" type="file" name="home_image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-home')">
                </div>
                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="home_heading" class="home-heading input" value="{{ $home->heading }}" placeholder=" ">
                        <label for="home_heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="home_sub_heading" class="home-heading input" value="{{ $home->sub_heading }}" placeholder=" ">
                        <label for="home_sub_heading" class="label">Sub-Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="home_description" class="home-description input" value="{{ $home->description }}" placeholder=" ">
                        <label for="home_description" class="label">Description</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="about-section" class="form-section">
            <h5 class="page-headings">About Page Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-about">
                        <img id="image-preview-about" src="{{ $about->image ?? asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-about" type="file" name="about_image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-about')">
                </div>
                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="about_heading" class="home-heading input" value="{{ $about->heading }}" placeholder=" ">
                        <label for="about_heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="about_highlight" class="home-heading input" value="{{ $about->highlight }}" placeholder=" ">
                        <label for="about_highlight" class="label">Highlight</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="about_description" class="home-description input" value="{{ $about->description }}" placeholder=" ">
                        <label for="about_description" class="label">Description</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="services-section" class="form-section">
            <h5 class="page-headings">Services Details-</h5>
            <div class="home-data">
                <div class="image-upload">
                    <label for="file-input-services">
                        <img id="image-preview-services" src="{{ $services->image ?? asset('home/icons8-plus-48.png') }}" alt="Upload Image">
                    </label>
                    <input id="file-input-services" type="file" name="services_image" accept="image/*" class="form-image" onchange="previewImage(event, 'image-preview-services')">
                </div>
                <div id="home-text-data">
                    <div class="form-inputs">
                        <input type="text" name="services_heading" class="home-heading input" value="{{ $services->heading }}" placeholder=" ">
                        <label for="services_heading" class="label">Heading</label>
                    </div>
                    <div class="form-inputs">
                        <input type="text" name="services_description" class="home-description input" value="{{ $services->description }}" placeholder=" ">
                        <label for="services_description" class="label">Description</label>
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
                            <input type="email" name="contact_email" class="home-heading input" value="{{ $contact->email }}" placeholder=" ">
                            <label for="contact_email" class="label">E-Mail</label>
                        </div>
                        <div class="form-inputs">
                            <input type="text" name="contact_address" class="home-heading input" value="{{ $contact->address }}" placeholder=" ">
                            <label for="contact_address" class="label">Address</label>
                        </div>
                    </div>
                    <div class="contact-form-section">
                        <div class="form-inputs">
                            <input type="number" name="contact_phone1" class="home-heading input phone" value="{{ $contact->phone1 }}" placeholder=" ">
                            <label for="contact_phone1" class="label">☎️ Phone No 1</label>
                        </div>
                        <div class="form-inputs">
                            <input type="number" name="contact_phone2" class="home-heading input phone" value="{{ $contact->phone2 }}" placeholder=" ">
                            <label for="contact_phone2" class="label">☎️ Phone No 2</label>
                        </div>
                    </div>
                    <div class="contact-form-section">
                        <div class="form-inputs">
                            <input type="text" name="contact_facebook" class="home-heading input" value="{{ $contact->facebook }}" placeholder=" ">
                            <label for="contact_facebook" class="label">Facebook link</label>
                        </div>
                        <div class="form-inputs">
                            <input type="text" name="contact_instagram" class="home-heading input" value="{{ $contact->instagram }}" placeholder=" ">
                            <label for="contact_instagram" class="label">Instagram link</label>
                        </div>
                    </div>
                    <div class="form-inputs location">
                        <input type="text" name="contact_location" class="home-heading input" value="{{ $contact->location }}" placeholder=" ">
                        <label for="contact_location" class="label">🌎 Location</label>
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
@endsection
