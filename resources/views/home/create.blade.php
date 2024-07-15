<link rel="stylesheet" href="<?php echo asset(
        "home/create.css"
    ); ?>" type="text/css">

<div class="create-page">
    @include('home.navbar')

    <h4 class="Create-heading">Create new user!</h4>

    <form action="/upload" method="post" enctype="multipart/form-data" class="create-form">
        @csrf
        <h5 class="page-headings">Home Page Details-</h5>

        <div class="home-data">
            <input type="file" name="image" accept="image/*" class="form-image">

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

        <h5 class="page-headings">About Page Details-</h5>

        <div class="home-data">
            <input type="file" name="image" accept="image/*" class="form-image">

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

        <h5 class="page-headings">Services Details-</h5>

        <div class="home-data">
            <input type="file" name="image" accept="image/*" class="form-image">

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

        <h5 class="page-headings">Contect Details-</h5>

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
        <button type="submit">Save</button>
    </form>
</div>


<script>
Dropzone.options.myDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  acceptedFiles: 'image/*', // Allow only images
  dictDefaultMessage: 'Drop images here or click to upload',
  init: function() {
    this.on("success", function(file, response) {
      // Handle success response
    });
    this.on("error", function(file, errorMessage) {
      // Handle error response
    });
  }
};

document.addEventListener("wheel", function(event){
    if(document.activeElement.type === "number" &&
       document.activeElement.classList.contains("phone"))
    {
        document.activeElement.blur();
    }
});
</script>
