<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .tulisan {
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding-left: 20px;
        }
        

        .bungkus {
            border: 1px solid black;
            box-shadow: 2px 2px 3px 3px;
            border-radius: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a_203040086</title>
</head>
<body>
    <?php 
        function tulis_miring($text, $style, $style2) 
        {
            echo "<div class = '$style2'>
                <h3 class = '$style'> $text </h3>
            </div>";
        }
    ?>

    <?php
        echo tulis_miring("Selamat datang di praktikum PW", "tulisan", "bungkus");
    ?>
</body>
</html>