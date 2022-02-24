<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload an Image To Gallery</title>
     <!-- Bootstrap CSS -->
     <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="../css/aos.css">
    <!-- Original CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="gallery">
        <h1 class="text-center" data-aos="zoom-in" data-aos-duration="2000">Upload New Image</h1>
        
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <!-- Input Form -->
            <div class="col-sm">
                <form id="upload_gallery_form" method="POST" action="../db/upload_image.php" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="title_field" class="form-label mt-5">Title</label>
                      <input name="title_field" type="text" class="form-control" id="title_field" aria-describedby="title_field">
                    </div>
                    <div class="mb-3">
                        <label for="description_field" class="form-label">Description</label>
                        <textarea name="description_field" id="description_field" rows="10" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="image_chooser" class="form-label">Image</label>
                      <input name="image_chooser" class="form-control" type="file" id="image_chooser">
                    </div>
                    <div class="mb-3">
                        <label for="auth_field" class="form-label">Auth Code</label>
                        <input type="password" name="auth_field" class="form-control" id="auth_field">
                        <div id="emailHelp" class="form-text">Don't share you auth code</div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Upload</button>
                  </form>
            </div>
            <div class="col-sm">
                <div class="card h-100 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <img src="../imgs/no-image.png" class="card-img-top lazyload" data-src="../imgs/gallery/post_1.jpg">
                    <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Description</p>
                    </div>
                    <div class="card-footer"><small class="text-muted">Date</small></div></div>
            </div>
            <!-- Preview -->
        </div>
    </div>

    <!-- Jquery Scripts -->
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Popperjs Scripts -->
    <script src="../js/popperjs/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!--Boostrap Scripts -->
    <script src="../js/bootstrap/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- AOs Scripts -->
    <script src="../js/aos.js"></script>
    <!-- Lazy Load Scripts -->
    <script src="../js/lazyload.min.js"></script>
    <!-- Original Scripts -->
    <script src="../js/loader.js"></script>
    <script src="../js/uploadGallery.js"></script>
    <script>
        AOS.init()
    </script>
</body>
</html>