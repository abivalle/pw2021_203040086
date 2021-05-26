<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$itemdota = query("SELECT * FROM itemdota WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4c_203040086</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .gambar {
            text-align: center;
        }

        .keterangan {
            text-align: justify;
        }
    </style>
</head>
<body>
<!-- header -->
<header>
        <div class="container">
            <img src="assets/img/logodota1.png" width="40px" class="imglogo" alt="">
            <!-- sc = shttps://www.pngwing.com/en/free-png-zpmdq/download -->
        <h1><a href="index.php">Dotapedia</a></h1>
            <ul>    
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

<!-- content -->
<div class="section">
    <div class="container">
        <div class="box">
        <div class="gambar">
            <img src="../assets/img/<?= $itemdota["Picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p>Nama Item : </p>
            <p><?= $itemdota["Name"]; ?></p>
            <p>Deskripsi Item : </p>
            <p><?= $itemdota["Description"]; ?></p>
            <p>Detail Item : </p>
            <p><?= $itemdota["Detail"]; ?></p>
            <p>Harga : </p>
            <p><?= $itemdota["Price"]; ?></p>
            <p>Stok Item : </p>
            <p><?= $itemdota["StokItem"]; ?></p>
        </div>

        <button class="btn-login"><a href="../index.php">Kembali</a></button>
    </div>
</body>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Dotapedia.</small>
        </div>
    </footer>
</html>