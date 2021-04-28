<?php
require 'functions.php';

$id = $_GET['id'];
$id = query("SELECT * FROM itemdota WHERE id = $id ")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0 ) {
        echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
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
    <title>Form Ubah Data ItemDota</title>
</head>
<body>
<h3 >Form Ubah Data ItemDota</h3>
    <form action="" method="post">
    <ul>
        <li>
            <input type="hidden" name="id" id="id" value="<?= $id['id']; ?>">
        </li>
        <li>
            <label for="Name">Name :</label><br>
            <input type="text" name="name" id="name" required value="<?= $id['Name']; ?>"><br><br>
        </li>
        <li>
            <label for="Description">Desription :</label><br>
            <input type="text" name="description" id="description" required value="<?= $id['Description']; ?>"><br><br>
        </li>
        <li>
            <label for="Detail">Detail :</label><br>
            <input type="text" name="detail" id="detail" required value="<?= $id['Detail']; ?>"><br><br>
        </li>
        <li>
            <label for="Price">Price :</label><br>
            <input type="text" name="price" id="price" required value="<?= $id['Price']; ?>"><br><br>
        </li>
        <li>
            <label for="StokItem">StokItem :</label><br>
            <input type="text" name="stokitem" id="stokitem" required value="<?= $id['StokItem']; ?>"><br><br>
        </li>
        <li>
            <label for="Picture">Picture :</label><br>
            <input type="file" name="picture" id="picture" required value="<?= $id['Picture']; ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color:black;">Kembali</a>
        </button>
    </ul>
</body>
</html>