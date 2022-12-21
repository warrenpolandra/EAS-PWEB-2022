<!DOCTYPE html>
<html>

<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/register_success.css">
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
                    echo "REGISTRASI BERHASIL";
                } else {
                    echo "REGISTRASI GAGAL";
                }
            ?>
        </h1>
        <?php endif; ?>

        <a href="login.php">Kembali ke halaman log in</a>
    </div>

    </body>
</html>