<?php

require('fpdf.php');
include ("config.php");

$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,7,'KARTU PESERTA UJIAN CPNS 2022',0,1,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(280,7,'Formasi Lulusan Terbaik',0,1,'C');
$pdf->Cell(10,7,'',0,1);


$pdf->SetFont('Arial','',12);

$pdf->Cell(10,6,'Instansi',0,0,'L');
$pdf->Cell(40,6,':',0,0,'R');
$pdf->Cell(10,6,'Kementerian Kelautan dan Perikanan',0,1,'L');

$pdf->Cell(40,6,'',0,1,'R');

$pdf->Cell(10,6,'Lokasi',0,0,'L');
$pdf->Cell(40,6,':',0,0,'R');
$pdf->Cell(10,6,'Pusat Pengendalian Mulu Badan Karantina Ikan
Pengendalian Mutu',0,1,'L');
$pdf->Cell(10,6,'',0,0,'R');
$pdf->Cell(40,6,'',0,0,'R');
$pdf->Cell(50,6,'dan Keamanan Hasil Perikanan',0,1,'L');

$pdf->Cell(40,6,'',0,1,'R');

$pdf->Cell(10,6,'NIK',0,0,'L');
$pdf->Cell(40,6,':',0,0,'R');

$uid=$_GET['uid'];
$query = "SELECT nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, pasfoto FROM user WHERE uid=$uid";
$result = mysqli_query($db, $query);
if(!$result){
    die("Gagal mengambil data");
}
while($user = mysqli_fetch_array($result)){

    $pdf->Cell(10,6,$user['nik'],0,1,'L');
    
    $image = "src/image/pasfoto/".$user['pasfoto'];
    $pdf->Cell(210,6,'',0,0,'R');
    $pdf->Cell(10,6, $pdf->Image($image, $pdf->GetX(), $pdf->GetY(), 33.78),0,1,'C');

    $pdf->Cell(10,6,'Nomor Peserta',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(10,6,'3016-923-0001395',0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,6,'Nama Peserta',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,$user['nama'],0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->Cell(10,6,'Jenis Kelamin',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,$user['jenis_kelamin'],0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->Cell(10,6,'Tempat/Tanggal Lahir',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,$user['tempat_lahir']."/".date("d-m-Y", strtotime($user['tanggal_lahir'])),0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->Cell(10,6,'Kualitas Pendidikan',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,'S1 Teknologi Hasil Perikanan',0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->Cell(10,6,'Formasi Jabatan',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,'Pengawas Perikanan Pertana',0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');

    $pdf->Cell(10,6,'Lokasi Tes',0,0,'L');
    $pdf->Cell(40,6,':',0,0,'R');
    $pdf->Cell(10,6,'Gedung Kementerian Kelautan dan Perikanan Surabaya',0,1,'L');

    $pdf->Cell(40,6,'',0,1,'R');
    $pdf->Cell(40,6,'',0,1,'R');
    $pdf->Cell(40,6,'',0,1,'R');
    $pdf->Cell(40,6,'',0,1,'R');
    $pdf->Cell(240,6,'Panitia Pelaksana',0,0,'R');

    // $pdf->Cell(10,6,$siswa['id'],1,0);   
}

// $pdf->SetFont('Arial','B',12);
// $pdf->Cell(10,6,'ID',1,0,'C');
// $pdf->Cell(64,6,'NAMA',1,0,'C');
// $pdf->Cell(75,6,'ALAMAT',1,0,'C');
// $pdf->Cell(34,6,'JENIS KELAMIN',1,0,'C');
// $pdf->Cell(30,6,'AGAMA',1,0,'C');
// $pdf->Cell(64,6,'SEKOLAH ASAL',1,1,'C');


$pdf->Output();
?>