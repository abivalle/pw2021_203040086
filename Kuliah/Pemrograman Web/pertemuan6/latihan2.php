<?php 

$mahasiswa = [
    [
        "img" => "orang1.jpg",
        "nama" => "David",
        "npm" => "112233667", 
        "prodi" => "Teknik Informatika",
        "email" => "david@gmail.com"
    ],
    [
        "img" => "orang2.jpg",
        "nama" => "Ryan",
        "npm" => "112233445",
        "prodi" => "Teknik Mesin",
        "email" => "ryan@gmail.com"
    ]
];

// Cara menampilkan satu elemen pada array multidimensi
    //echo $mahasiswa[1]["email"];

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

    <!-- tampilan foreach untuk array asosiatif -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <img src="img/<?= $mhs["img"]; ?>" width="100px">
        <li><?= $mhs["npm"]; ?></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["prodi"]; ?></li>
        <li><?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>