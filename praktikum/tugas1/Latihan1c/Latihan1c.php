<?php 
// Abizar Valentino Fachri
// 203040086
// Shift Kamis 08.00 - 09.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    div {
        width: 50px;
        height: 50px;
        background-color: salmon;
        font-size: 40px;
        display: inline-block;
        line-heigt: 50px;
        text-align: center;
        color: black;
        margin: 0px 5px 10px 0px;
        border-radius: 100%;
        border: 2px solid black;
        }
    </style>
    <title>Latihan1c_203040086</title>
</head>
<body>
    <?php for ($i = 1; $i <= 3; $i++):?>
        <?php for ($s = 1; $s <= $i; $s++):?>
            <div><?= $i ?></div>
        <?php endfor;?>
        <br>
    <?php endfor;?>
    </body>
</html>