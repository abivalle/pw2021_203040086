<?php
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++)
    {
        for ($m = 1; $m <= $i; $m++)
        {
            echo "<div class = 'bola'>" . $i . "</div>";
        }
            echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .bola {
            background-color: salmon;
            font-size: 30px;
            height: 50px;
            display: inline-block;
            margin: 2px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border: 1px solid black;
            border-radius: 50%;
        }
        .kotak {
            border: 2px solid black;
            padding: 15px;
            width: 300px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c_203040086</title>
</head>
<body>
    <div class="kotak">
        <?php echo tumpukanBola(5); ?>
    </div>
</body>
</html>