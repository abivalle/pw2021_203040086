<?php
require 'functions.php';

if (isset($_POST["register"]))
{
    if (registrasi($_POST) > 0)
    {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .imglogo {
            float: left;
            margin-top: 8px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<!-- header -->
<header>
        <div class="container">
        <img src="../assets/img/logodota1.png" width="40px" class="imglogo" alt="">
        <!-- sc = shttps://www.pngwing.com/en/free-png-zpmdq/download -->
        <h1><a href="">Dotapedia</a></h1>
            <ul>    
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>

<!-- content -->
<div class="section">
    <div class="container">
        <h3>Registrasi Akun</h3>
            <div class="box">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td><label for="username">username</label></td>
                            <td>:</td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label for="password">password</label></td>
                            <td>:</td>
                            <td><input type="password" name="password"></td>
                        </tr>
                    </table>
                    <button type="submit" name="register" class="btn-login">REGISTER</button>
                </form>
            </div>
    </div>
</div>
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Dotapedia.</small>
        </div>
    </footer>
</body>
</html>