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
    <title>Data Produk</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        .cari {
            margin-top: 10px;
        }

        .box {
            margin: 10px 0px;
        }

        .btn-hapus {
        padding: 8px 12px;
        margin-top: 5px;
        margin-left: 10px;
        background-color: salmon;
        color: #fff;
        border: none;
        cursor: pointer;
        }

        .btn-login {
            margin-left: 10px;
        }

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
                <li><a href="">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>

<!-- content -->
    <div class="section">
        <div class="container">
            <h3>Data Produk</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['username'] ?> di Data Produk Dotapedia</h4>
            </div>
        </div>
    </div>

<div class="section">
    <div class="container">
    <div class="add">
        <a href="tambah.php">
            <button type="" class="btn-login">Tambah Data</button>
        </a>
    </div>
    <form action="" method="get" class="cari">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
        <div class="box">
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Name</th>
            <th>Description</th>
            <th>Detail</th>
            <th>Price</th>
            <th>StokItem</th>
            <th>Picture</th>
        </tr>
        <?php if(empty($itemdota)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($itemdota as $id) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $id['id'] ?>"><button class="btn-login">Ubah</button></a>
                <a href="hapus.php?id=<?= $id['id'] ?> " onclick="return confirm('Hapus Data??')"><button class="btn-hapus">Hapus</button></a>
            </td>
            <td><?= $id['Name']; ?></td>
            <td><?= $id['Description']; ?></td>
            <td><?= $id['Detail']; ?></td>
            <td><?= $id['Price']; ?></td>
            <td><?= $id['StokItem']; ?></td>
            <td><a href="../assets/img/<?= $id['Picture']; ?>" target="_blank"><img src="../assets/img/<?= $id['Picture']; ?>" alt=""></a></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
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