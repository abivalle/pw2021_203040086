<?php 
// Variable Scope
// $x hanya variabel local di halaman utama latihan1.php ini
    //$x = 10;

    // Kalau mau pake $x yg ada sebelumnya harus difunction, harus kasih keyword global dulu
    //function tampilX() {
    //global $x;
    //echo $x;
    //}

// Superglobals = variable global milik PHP, Array Associative
// $_GET dan $_POST = ada isinya tapi kosong
// $_GET dikirim melalui URL
// $_GET cara input data lewat program
    //$_GET["nama"] = "Salsabila Febrianty NP";
    //$_GET["npm"] = "203040104";
    //var_dump($_GET);
// $_GET cara input data lewat url
    //var_dump($_GET);

// Studi Kasus
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
//$_GET["Nama"] = "Abizar Valentino Fachri";
//$_GET["Prodi"] = "Teknik Informatika";

//print_r($_GET);
//echo "<br>";
//var_dump($_GET);

//// Minimal versi 7
//    //echo "<br>";
//    //dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"];?>&prodi=<?= $mhs["prodi"];?>&email=<?= $mhs["email"];?>&img=<?= $mhs["img"];?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>

</body>
</html>