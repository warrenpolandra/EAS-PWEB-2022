<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ujian_kkp";

$db = mysqli_connect($server, $user, $password, $nama_database, "8111");
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$pdo = new PDO('mysql:host='.$server.';port=8111;dbname='.$nama_database, $user, $password);

?>