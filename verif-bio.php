<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/icon/logo.ico"/>
    <link rel="stylesheet" href="css/verif-bio.css">

</head>

<body>
    <header>
        <img src="src/image/logo.png">
        <h3>
            KEMENTERIAN KELAUTAN DAN PERIKANAN
            </br>
            REPUBLIK INDONESIA
            </br>
            PROVINSI JAWA TIMUR
        </h3>
        <a class="btn-back" href="dashboard.php">Kembali</a>  
    </header>
    <div>
        <h2 class="a">Verifikasi Biodata</h2>
        <h3 class="b">Isilah data berikut dengan lengkap</h3>  
</div>

<div class="form">
  <?php
    echo "<form action='proses-profil.php?uid=".$_SESSION['uid']."' method='POST' enctype='multipart/form-data'>";
  ?>
    <div class="attribute">
      <label>
        Nama Lengkap
        <input type="text" name="nama" required>
      </label>
    </div>

    <div class="attribute">
    <label>
        NIK
        <input type="text" name="nik" required>
      </label>
    </div>

    <div class="attribute">
      <label>
        Tempat Lahir
        <input type="text" name="tempat_lahir" required>
      </label>
    </div>

    <div class="attribute">
    <label>
        Tanggal Lahir
        <input type="date" name="tanggal_lahir" required>
      </label>
    </div>

    <div class="attribute">
     <label>
        Jenis Kelamin
        <label class="cntnr">Laki-laki
            <input type="radio" name="jenis_kelamin" checked="checked" value="laki-laki"> 
            <span class="checkmark"></span>
        </label>
        <label class="cntnr">Perempuan
            <input type="radio" name="jenis_kelamin" value="perempuan"> 
            <span class="checkmark"></span>
        </label>
      </label>
    </div>

    <div class="attribute">
    <label for="agama">Agama</label>
    <select id="agama" name="agama" required>
        <option value='Islam'>Islam</option>
		<option value='Kristen'>Kristen</option>
		<option value='Katholik'>Katholik</option>
		<option value='Hindu'>Hindu</option>
		<option value='Buddha'>Buddha</option>
    </select>
    </div>

    <div class="attribute">
    <label>
      Alamat Domilisi
      <input type="text" name="alamat" required>
    </label>
    </div>

    <div>
    <label for="pasfoto" class="drop-container">
        <span class="drop-title">Upload Pas Foto Disini</span>
        atau
        <input type="file" id="pasfoto" name="pasfoto" required>
    </label>

    <label for="ktp" class="drop-container">
        <span class="drop-title">Upload Foto KTP Disini</span>
        atau
        <input type="file" id="ktp" name="ktp" required>
    </label>

    <label for="berkas" class="drop-container">
        <span class="drop-title">Upload Berkas Pendukung Disini</span>
        atau
        <input type="file" id="berkas" name="berkas">
    </label>
    </div>
    
    <input class="btns" type="submit" value="submit" name="submit">
  </form>
</div>
</body>
</html>