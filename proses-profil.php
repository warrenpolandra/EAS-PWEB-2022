<?php

include("config.php");

if(isset($_POST['submit'])){

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $uid = $_GET['uid'];
    $verifikasi = 0;

    $pasfoto = $_FILES['pasfoto']['name'];
    $tmp_pastofo = $_FILES['pasfoto']['tmp_name'];
    $pasfotobaru = date('dmYHis').$pasfoto;
    $path_pasfoto = "src/image/pasfoto/".$pasfotobaru;

    $ktp = $_FILES['ktp']['name'];
    $tmp_ktp = $_FILES['ktp']['tmp_name'];
    $ktpbaru = date('dmYHis').$ktp;
    $path_ktp = "src/image/ktp/".$ktpbaru;

    $berkas = $_FILES['berkas']['name'];
    $tmp_berkas = $_FILES['berkas']['tmp_name'];
    $berkasbaru = date('dmYHis').$berkas;
    $path_berkas = "src/image/berkas/".$berkasbaru;
    
    // berkas
    
    
    if(move_uploaded_file($tmp_pastofo, $path_pasfoto) && move_uploaded_file($tmp_ktp, $path_ktp) && move_uploaded_file($tmp_berkas, $path_berkas)){

        $sql = $pdo->prepare("UPDATE user SET nik=:nik, nama=:nama, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, alamat=:alamat, agama=:agama, verifikasi=:verifikasi, pasfoto=:pasfoto, ktp=:ktp, berkas=:berkas WHERE uid=:uid");
        $sql->bindParam(':nik', $nik);
        $sql->bindParam(':nama', $nama);
        $sql->bindParam(':tempat_lahir', $tempat_lahir);
        $sql->bindParam(':tanggal_lahir', $tanggal_lahir);
        $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
        $sql->bindParam(':alamat', $alamat);
        $sql->bindParam(':agama', $agama);
        $sql->bindParam(':uid', $uid);
        $sql->bindParam(':verifikasi', $verifikasi);
        $sql->bindParam(':pasfoto', $pasfotobaru);
        $sql->bindParam(':ktp', $ktpbaru);
        $sql->bindParam(':berkas', $berkasbaru);
        
        $execute = $sql->execute();

        // check query
        if($sql) {
            // redirect index.php dengan status=sukses
            header('Location: profil-info.php?status=sukses');
        } else {
            // redirect index.php dengan status=gagal
            header('Location: profil-info.php?status=gagal');
        }
    }

} else {
    die("Akses dilarang...");
}

?>