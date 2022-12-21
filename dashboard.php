<?php
session_start();
$login = $_SESSION['login'];
if($login == 1)
{
    include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/dashboard.css">
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
        <a class="btn-logout" href="index.php">Logout</a>  
    </header>

    <div class="container">
        <h2>Selamat datang, 
            <?php
                echo $_SESSION['username'];
            ?>
        </h2>
        <a>Silakan verifikasi biodata terlebih dahulu pada bagian </a><a href="verif-bio.php">profil</a>
        
        <h3>Profil</h3>
        <div class="line"></div>

        <div class="card-list">
        <?php
            echo "<a href='verif-bio.php'>"
        ?>
                <div class="card">
                    <img src="src/icon/profile-icon.svg">
                    <h4>Biodata</h4>
                </div>
            </a>
        </div>

        <h3>Ujian yang diikuti</h3>
        <div class="line"></div>

        <div class="card-list">
        <?php
            echo "<a href='kartu-ujian.php?uid=".$_SESSION['uid']."'>"
        ?>
                <div class="card">
                    <img src="src/icon/test-icon.svg">
                    <h4>CPNS 2022</h4>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
    <?php
}
else {
 include "login.php";
} 
?>