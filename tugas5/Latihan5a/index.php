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
        <?php foreach ($itemdota as $id) : ?>
            <p class="Name">
                <a href="php/detail.php?id=<?= $id['id'] ?>">
                    <?= $id["Name"] ?>
                </a>
            </p>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>