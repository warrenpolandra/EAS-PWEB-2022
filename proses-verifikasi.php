<?php
include "config.php";
$nik = $_GET['nik'];

$verifikasi = '1';

if(empty($foto)){
  $sql = $pdo->prepare("UPDATE user SET verifikasi=1 WHERE nik=:nik");
  $sql->bindParam(':nik', $nik);
  $execute = $sql->execute();
  if($sql){
    header("location: daftar-peserta.php?status=sukses&nik=".$nik);
  }else{
    header("location: daftar-peserta.php?status=gagal");
  }
}
