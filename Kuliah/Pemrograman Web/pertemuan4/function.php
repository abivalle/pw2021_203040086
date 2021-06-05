<?php 
// User Defined Function
// function nama_function($parameter bisa beberapa) {}
// perlu didefinisikan defaultnya, apabila parameter bisa dikosongkan $parameter = "default tampilan"
    function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>

    <h1><?= salam("Malam"); ?></h1>
    
</body>
</html>