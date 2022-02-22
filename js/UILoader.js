$(document).ready(function(){
    // Load favicon
    $("head").append("<link rel='shortcut icon' href='../imgs/logo_osis.png' type='image/x-icon'>");

    // Load navbar
    $("body").append(`<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" data-aos="fade-down" data-aos-duration="1000">
    <div class="container">
        <img src="../imgs/logo_osis.png" alt="" width="40">
        <a class="navbar-brand ms-2" href="#">OSIS DARSA</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php">News</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./gallery.php">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>`);
})