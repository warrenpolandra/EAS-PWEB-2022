<?php 
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/icon/logo.ico"/>
    <link rel="stylesheet" href="css/kartu.css">
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
        <h2 class="a">Cetak Kartu Ujian</h2>
        <h3 class="b">Harap memastikan data yang ada sudah benar sebelum mencetak kartu </h3>     
    </div>
    <?php
        $uid = $_GET['uid'];
        echo "<a class='btn-cetak' target='_blank' href='printpdf.php?uid=".$uid."'>Cetak</a>";
    ?>
    
<div align="center" class="kartu-peserta-seleksi-wrapper">
        <div class="kartu-peserta-seleksi">
            <div class="head-wrapper">
                <div class="sec">
                    <h3>KARTU PESERTA UJIAN CPNS 2022</h3>
                    <h3>Formasi Lulusan Terbaik</h3>
                </div>
            </div>
            <hr>
            <div class="content-wrapper">
                <table>
                    <tbody>
                        <tr>
                            <td>Instansi</td>
                            <td>:</td>
                            <td>Kementerian Kelautan dan Perikanan</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>:</td>
                            <td>Pusat Pengendalian Mulu Badan Karantina Ikan
                           <br> Pengendalian Mutu dan Keamanan Hasil Perikanan</td>
                        </tr>

                        <?php
                            $uid = $_GET['uid'];
                            $sql = "SELECT nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, pasfoto FROM user WHERE uid=$uid";
                            $data = $db->query($sql);
                            while($row = $data->fetch_assoc()) {

                                echo "<tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td>";
                                echo $row['nik'];
                                echo "</td>
                                </tr>";

                                echo "<tr>
                                <td>Nomor Peserta</td>
                                <td>:</td>
                                <td><strong>3016-923-0001395</strong></td>
                                </tr>";
                                
                                echo "<tr>
                                <td>Nama Peserta</td>
                                <td>:</td><td>";
                                echo $row['nama'];
                                echo "</td>
                                </tr>";

                                echo "<tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td><td>";
                                echo $row['jenis_kelamin'];
                                echo "</td>
                                </tr>";

                                echo "<tr>
                                <td>Tempat/Tanggal Lahir</td>
                                <td>:</td>
                                <td>";
                                echo $row['tempat_lahir']."/".date("d-m-Y", strtotime($row['tanggal_lahir']));
                                echo "</td>
                                </tr>";

                                echo "<tr>
                                <td>Kualitas Pendidikan</td>
                                <td>:</td>
                                <td>S1 Teknologi Hasil Perikanan</td>
                                </tr>";

                                echo "<tr>
                                <td>Formasi Jabatan</td>
                                <td>:</td>
                                <td>Pengawas Perikanan Pertama</td>
                                </tr>";

                                echo "<tr>
                                <td>Lokasi Tes</td>
                                <td>:</td>
                                <td>Gedung Kementerian Kelautan dan Perikanan Surabaya</td>
                                </tr>";

                                echo"</tbody>
                                </table>
                                <div class='foto'>
                                    <table>
                                        <tr>
                                            <td rowspan='4'>";
                                echo "<img src=src/image/pasfoto/".$row['pasfoto']." width='120' height='150'/>";
                            }
                        ?>
        </td>
        </tr>
    </table>
                </div>
            </div>
            <div class="footer-wrapper">
                <br>
                <p>Panitia Pelaksana</p>
                <br><br>
            </div>
    </div>

</body>

</html>