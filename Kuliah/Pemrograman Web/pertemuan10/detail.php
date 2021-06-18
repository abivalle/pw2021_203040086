<?php 
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" alt=""></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>NPM : <?= $m['npm']; ?></li>
    <li>Prodi : <?= $m['prodi']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>
</html>