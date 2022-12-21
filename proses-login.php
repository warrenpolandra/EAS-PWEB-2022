<?php 
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

//cek data
$sql = "SELECT * FROM user WHERE username='$username' ";
$qry = mysqli_query($db,$sql);
$usr = mysqli_fetch_array($qry);

if(
 md5($username) == md5($usr['username'])
 AND
 md5($password) == md5($usr['password'])
  )
{
 $_SESSION['nik']      = $usr['nik'];
 $_SESSION['username'] = $usr['username'];
 $_SESSION['uid']      = $usr['uid'];
 $_SESSION['nama']     = $usr['nama'];
 $_SESSION['level']    = $usr['level'];
 $_SESSION['login']    = 1;

 $pesan = "Login berhasil, selamat datang $username";
 echo "<script>";
 echo "alert('$pesan');";
 
 if($_SESSION['level'] == 1){
  echo "location='dashboard.php';";
 }
 else{
  echo "location='dashboard-admin.php';";
 }

 echo "</script>";

} else {
 echo "<script>";
 echo "alert('Login gagal, username atau password anda salah!');";
 echo "location='login.php';";
 echo "</script>";
}

?>
