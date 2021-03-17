<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php 
$PemainBolaTerkenal = 
    ["Cristiano Ronaldo" => "Juventus",
    "Lionel Messi"       => "Barcelona",
    "Luca Modric"        => "Real Madrid",
    "Mohammad Salah"     => "Liverpool",
    "Neymar Jr"          => "Paris Saint Germain",
    "Sadio Mane"         => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c_203040086</title>
    <style>
        .kotak {
            font-size: 14px;
            border: 2px solid black;
            width: 30%;
            font-family: Arial, Helvetica, sans-serif;
            padding-bottom: 10px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <table>
        <h3>Daftar pemain bola terkenal dan clubnya</h3>
            <?php foreach($PemainBolaTerkenal as $PemainBola => $club) : ?>
                <td><b><?= $PemainBola; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    
</body>
</html>