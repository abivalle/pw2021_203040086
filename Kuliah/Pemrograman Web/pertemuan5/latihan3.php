<?php 
//$mahasiswa = ["Abizar Valentino Fachri", "203040086", "Teknik Informatika", "abizarfachri24@gmail.com"];

// Array Multidimensi, Array Numerik (array dengan indeks angka)

    $mahasiswa = [
        ["Abizar Valentino Fachri", "203040086", "Teknik Informatika", "abizarfachri24@gmail.com"],
        ["Sabrina Saputri", "203040086", "Kedokteran Gigi", "sbrnsptr29@gmail.com"],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- tampilan foreach data 1 mahasiswa -->
    <!--<ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- tampilan foreach untuk data array numerik multidimensi -->
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NPM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>