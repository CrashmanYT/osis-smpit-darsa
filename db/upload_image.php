<?php

include "connect_db.php";

// check if field is exist
if (isset($_POST['title_field']) && isset($_POST['description_field']) && isset($_FILES['image_chooser']) && isset($_POST['auth_field'])) {
    // check if field is empty
    if (empty($_POST['title_field']) && empty($_POST['description_field']) && empty($_POST['auth_field'])) {
        echo "<script>alert('Mohon untuk mengisi form');</script>";
        echo "<script>window.location.href = '../pages/upload_gallery.php';</script>";
        die();
    }
    
    // validate all data
    $code = uniqid();
    $title = htmlspecialchars($_POST['title_field']);
    $description = strip_tags($_POST['description_field'], "<b><i><u>");
    $auth = htmlspecialchars($_POST['auth_field']);
    $date = date("Y-m-d");

    // upload image
    $image = upload();
    if (!$image) {
        echo "<script>alert('Mohon untuk mengupload gambar dengan benar');</script>";
        echo "<script>window.location.href = '../pages/upload_gallery.php';</script>";
        die();
    }
    
    // send query using prepared statements
    $stmt = mysqli_prepare($db, "INSERT INTO `gallery` (`image_code`,`image_title`, `image_description`, `image`, `image_date`) VALUES (?, ?, ?, ?, ?)");
    
    // bind data to prepared statement and execute
    mysqli_stmt_bind_param($stmt, "sssss", $code, $title, $description, $image, $date);
    mysqli_stmt_execute($stmt);
    
    // check if query is successful
    if (!$stmt){
        die('Query Error : '.mysqli_errno($db). ' - '.mysqli_error($db));
    } else {
        echo "<script>alert('Upload Successful');</script>";
        echo "<script>window.location.href = '../pages/upload_gallery.php';</script>";
    }
}

function upload() {
    $image_name = $_FILES['image_chooser']['name'];
    $image_size = $_FILES['image_chooser']['size'];
    $image_error = $_FILES['image_chooser']['error'];
    $image_tmp_name = $_FILES['image_chooser']['tmp_name'];

    if ($image_error === 4){
        echo "<script>alert('Gambar Tidak Ditemukan');</script>";
        return false;
    }

    $valid_image_ext = ['jpg', 'jpeg', 'png', 'gif'];
    $image_ext = explode('.',$image_name);
    $image_ext = strtolower(end($image_ext));
    if (!in_array($image_ext, $valid_image_ext)){
        echo "<script>alert('Maaf, kami tidak mendukung format gambar tersebut');</script>";
        return false;
    }

    if ($image_size > 10000000){
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }

    move_uploaded_file($image_tmp_name, '../imgs/gallery/'.$image_name);
    return $image_name;
}


?>