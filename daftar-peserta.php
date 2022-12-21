<!DOCTYPE html>
<html>
<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/daftar-peserta.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/icon/logo.ico"/>
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
        <a class="btn-back" href="dashboard-admin.php">Kembali</a>  
    </header>

    <div class="container">
        <div class="subheader">
            <h2>Daftar Calon Peserta Ujian</h2>
            <a>Harap mengecek data yang dimasukkan oleh pendaftar sebelum melakukan verifikasi</a>
            <div class="line"></div>
        </div>
    
        <table border="1" width="100%">
        <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Pasfoto</th>
            <th>KTP</th>
            <th>Berkas</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "config.php";
        $sql = $pdo->prepare("SELECT * FROM user");
        $sql->execute();
        while($data = $sql->fetch()){ 
            echo "<tr>";
            echo "<td>".$data['username']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['nik']."</td>";
            echo "<td>".$data['agama']."</td>";
            echo "<td>".$data['tempat_lahir']."</td>";
            echo "<td>".$data['tanggal_lahir']."</td>";
            echo "<td>".$data['jenis_kelamin']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td><a href='src/image/pasfoto/".$data['pasfoto']."' target='_blank'>cek</a></td>";
            echo "<td><a href='src/image/ktp/".$data['ktp']."' target='_blank'>cek</a></td>";
            echo "<td><a href='src/image/berkas/".$data['berkas']."' target='_blank'>cek</a></td>";
            echo "<td><a href='proses-verifikasi.php?nik=".$data['nik']."'>Verifikasi</a></td>";
            echo "</tr>";
        }
        
        echo "</table>";
        echo "<a>";
        
        $nik=$_GET['nik'];

        if($_GET['status'] == 'sukses'){
            echo "User dengan NIK ".$nik." berhasil diverifikasi";
        } else {
            echo "Verifikasi gagal!";
        }
        ?>
        </a>
        
    </div>
</body>
</html>