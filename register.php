<!DOCTYPE html>
<html>

<head>
    <title>Portal Ujian KKP</title>
    <link rel="stylesheet" href="css/register.css">
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
        <h1>Daftar Akun</h1>
        <form action="proses-register.php" method="POST">
                <input class="username" margin-top="0px" type="text" placeholder="Enter Username" name="username" required>
                <input class="password" type="password" placeholder="Enter Password" name="password" required>
                <input class="password_repeat" type="password" placeholder="Repeat Password" name="password_repeat" required>
                <input class="button-submit" type="submit" value="Daftar" name="register">
        </form>
        
    </div>

    </body>
</html>