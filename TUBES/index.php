<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php
    require 'php/functions.php';
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
    <title>Dotapedia</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .imglogo {
            float: left;
            margin-top: 8px;
            margin-right: 5px;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<!-- header -->
<header>
        <div class="container">
            <img src="assets/img/logodota1.png" width="40px" class="imglogo" alt="">
            <!-- sc = shttps://www.pngwing.com/en/free-png-zpmdq/download -->
        <h1><a href="index.php">Dotapedia</a></h1>
            <ul>    
                <li><a href="index.php">Produk</a></li>
            </ul>
        </div>
    </header>

<!-- search dan produk -->
<body>
<div class="search">
    <div class="container">
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form> 
    </div>
</div>

<!-- product -->
<div class="section">
    <div class="container">
        <h3>ARCANA</h3>
        <div class="box">
            <div class="col-6">
            <?php if(empty($itemdota)) : ?>
            <h1>Data tidak ditemukan</h1>
    <?php else : ?>
        <?php foreach ($itemdota as $id) : ?>
            <img src="assets/img/<?= $id['Picture'] ?>" alt="">
            <p class="Name">
                <a href="php/detail.php?id=<?= $id['id'] ?>">
                    <?= $id["Name"] ?>
                </a>
            </p>
            <p class="harga"><?= $id['Price'] ?></p>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>    
    <a href="php/login.php">
        <button type="" class="btn-login" style="margin-left: 20px;">
            Masuk ke halaman Admin
        </button>
    </a>
</div>



    <!-- footer -->
    <div class="footer">
        <div class="container">
            <h4>Alamat</h4>
            <p>Jalan Kebahagiaan No.24, Bogor, Indonesia.</p>

            <h4>Email</h4>
            <p>abizarfachri24@gmail.com</p>

            <h4>No. Hp</h4>
            <p>081296835970</p>
            <small>Copyright &copy; 2020 - Dotapedia.</small>
        </div>
    </div>

</body>
</html>