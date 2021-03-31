<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php 
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040086");
$result = mysqli_query($conn, "SELECT * FROM itemdota");
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row["Name"] ?></td>
                    <td><?= $row["Description"] ?></td>
                    <td><?= $row["Detail"] ?></td>
                    <td><?= $row["Price"] ?></td>
                    <td><?= $row["StokItem"] ?></td>
                    <td><img src="assets/img/<?= $row["Picture"]; ?>"></td>
                </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>