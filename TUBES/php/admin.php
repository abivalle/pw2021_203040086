<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $itemdota = query("SELECT * FROM itemdota WHERE
                    Name LIKE '%$keyword%' OR
                    Description LIKE '%$keyword%' OR
                    Detail LIKE '%$keyword%' OR
                    Price LIKE '%$keyword%' OR
                    StokItem LIKE '%$keyword%' ");
    } else {
        $itemdota = query("SELECT * FROM itemdota");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['username'] ?> di Dotapedia</h4>
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


                <!-- <th>Name</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Price</th>
                <th>StokItem</th>
                <th>Picture</th> -->