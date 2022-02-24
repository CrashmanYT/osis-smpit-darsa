<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = mysqli_connect($host, $user, $pass, "osis_smpit_darsa");

if (!$db){
    die("Connection failed: " . mysqli_connect_error());
}

?>