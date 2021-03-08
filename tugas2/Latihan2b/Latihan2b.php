<?php
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php
    $jawabanIsset = "Isset adalah =  untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL.";
    $jawabanEmpty = "Empty adalah = untuk memeriksa apakah sebuah objek form telah diisi atau tidak, Fungsi empty() akan menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi.";
    $GLOBALS["isset"] = $jawabanIsset;
    $GLOBALS["empty"] = $jawabanEmpty;

    function soal($style) 
    {
        echo "<div class = $style>
        <h1>" . $GLOBALS['isset'] . "</h1>
        <h1>" . $GLOBALS['empty'] . "</h1>
        </div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .kotak {
            font-size: 8px;
            padding-left: 10px;
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
        echo soal("kotak");
    ?>
</body>
</html>