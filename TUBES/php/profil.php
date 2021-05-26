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
    <title>Latihan5a_203040086</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<!-- header -->
    <header>
        <div class="container">
        <h1><a href="">Dotapedia</a></h1>
            <ul>    
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="">Data Kategori</a></li>
                <li><a href="">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>

<!-- content -->
    <div class="section">
        <div class="container">
            <h3>Profil</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required">
                    <input type="text" name="user" placeholder="Username" class="input-control" required>
                    <input type="text" name="hp" placeholder="No Hp" class="input-control" required>
                    <input type="email" name="email" placeholder="Email" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn-login">
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


                <!-- <th>Name</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Price</th>
                <th>StokItem</th>
                <th>Picture</th> -->