<?php

include("config.php");

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // query
    $sql = "INSERT INTO user (username, password, level) VALUE ('$username', '$password', '1')";
    $query = mysqli_query($db, $sql);

    // check query
    if($query) {
        // redirect register-info.php dengan status=sukses
        header('Location: register-info.php?status=sukses');
    } else {
        // redirect register-info.php dengan status=gagal
        header('Location: register-info.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>