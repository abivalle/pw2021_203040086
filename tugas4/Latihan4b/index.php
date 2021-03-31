<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php
    require 'php/functions.php';
    $itemdota = query("SELECT * FROM itemdota")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan4a_203040086</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Price</th>
                <th>StokItem</th>
                <th>Picture</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($itemdota as $id) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $id["Name"] ?></td>
                    <td><?= $id["Description"] ?></td>
                    <td><?= $id["Detail"] ?></td>
                    <td><?= $id["Price"] ?></td>
                    <td><?= $id["StokItem"] ?></td>
                    <td><img src="assets/img/<?= $id["Picture"]; ?>"></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>