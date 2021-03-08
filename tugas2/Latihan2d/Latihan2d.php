<?php
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php
function hitungDeterminan($f, $a, $z, $i)
{
    // baris code perhitung determinan

    //menampilkan matriks
echo "<table style ='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
    <tr>
        <td> $f </td>
        <td> $a </td>
    </tr>
    <tr>
        <td> $z </td>
        <td> $i </td>
    </tr>
    </table>";
    $determinan = (($f * $i) - ($z * $a));
echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .matriks {
            border: 1px solid black;
            padding: 15px;
            color: red;
            width: 320px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d_203040086</title>
</head>
<body>
    <div class="matriks">
        <?php 
            hitungDeterminan(1, 2, 3, 4)
        ?>
    </div>
</body>
</html>