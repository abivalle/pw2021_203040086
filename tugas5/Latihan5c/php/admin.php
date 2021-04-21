<?php
    require 'functions.php';

    $itemdota = query("SELECT * FROM itemdota");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a_203040086</title>
</head>
<body>
    <div class="add">
        <a href="tambah.php">
            <button type="">Tambah Data</button>
        </a>
    </div>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Name</th>
            <th>Description</th>
            <th>Detail</th>
            <th>Price</th>
            <th>StokItem</th>
            <th>Picture</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($itemdota as $id) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href=""><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $id['id'] ?> " onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
            </td>
            <td><?= $id['Name']; ?></td>
            <td><?= $id['Description']; ?></td>
            <td><?= $id['Detail']; ?></td>
            <td><?= $id['Price']; ?></td>
            <td><?= $id['StokItem']; ?></td>
            <td><img src="../assets/img/<?= $id['Picture']; ?>" alt=""></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>


                <!-- <th>Name</th>
                <th>Description</th>
                <th>Detail</th>
                <th>Price</th>
                <th>StokItem</th>
                <th>Picture</th> -->