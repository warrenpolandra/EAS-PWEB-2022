<!DOCTYPE html>
<html>

<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/profil-success.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/icon/logo.ico" />
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
    </header>

    <div class="container">
        <img src="src/image/gedung.jpg">
        <?php if(isset($_GET['status'])): ?>
        <h1>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "BIODATA TERSIMPAN";
                } else {
                    echo "BIODATA GAGAL TERSIMPAN";
                }
            ?>
        </h1>
        <?php endif; ?>

        <a href="dashboard.php">Kembali ke halaman dahsboard</a>
    </div>

    </body>
</html>