<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ujian_kkp";

$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$pdo = new PDO('mysql:host='.$server.';dbname='.$nama_database, $user, $password);

?>
