<?php
session_start();

if (!isset($_SESSION["username"]))
{
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0 ) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'admin.php';
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
    <title>Tambah Produk</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <style>
    .box {
    background-color: #DAF7A6;
    padding: 35px;
    box-sizing: border-box;
    margin: 5px 0;
    }

    .container h3 {
        padding-bottom: 20px;
    }

    .box {
        background-color: #f6f6f6;
    }

    
    body {
        background-color: #e48900;
    }

    .imglogo {
            float: left;
            margin-top: 8px;
            margin-right: 5px;
        }

    footer {
        background-color: #333;
        color: #fff;
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
        <h3>Tambah Data</h3>
            <div class="box">
            <h3>Form Tambah Data Produk</h3>
                <form action="" method="post">
                <ul>
                    <li>
                        <label for="Name">Name :</label><br>
                        <input type="text" name="name" id="name" required><br><br>
                    </li>
                    <li>
                        <label for="Description">Desription :</label><br>
                        <input type="text" name="description" id="description" required><br><br>
                    </li>
                    <li>
                        <label for="Price">Price :</label><br>
                        <input type="text" name="price" id="price" required><br><br>
                    </li>
                    <li>
                        <label for="StokItem">StokItem :</label><br>
                        <input type="text" name="stokitem" id="stokitem" required><br><br>
                    </li>
                    <li>
                        <label for="Picture">Picture :</label><br>
                        <input type="file" name="picture" id="picture" required><br><br>
                    </li>
                    <li>
                        <label for="Detail">Detail :</label><br>
                        <textarea class ="input-control" name="detail" id="detail" placeholder="detail" required></textarea><br><br>
                    </li>
                    <br>
                    <button type="submit" name="tambah" class="btn-login">Tambah Data!</button>
                    <button type="submit" name="kembali" class="btn-login">
                        <a href="data-produk.php" style="text-decoration: none; color:white;">Kembali</a>
                    </button>
                </ul>
            </div>
    </div>
</div>

<!-- footer -->
<footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Dotapedia.</small>
        </div>
    </footer>
    <script>
        CKEDITOR.replace( 'detail' );
    </script>
</body>
</html>