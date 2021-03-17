<?php 
//Abizar Valentino Fachri
//203040086
//Shift Kamis 08.00 - 09.00
?>

<?php 
$barang = [
    [
        "Name"=>"Exalted Manifold Paradox (Arcana Phantom Assassin)",
        "Description"=>"Full Unlocked 3 Style of Arcana Phantom Assasin",
        "Detail"=>"NEW - ARCANA - UNLOCKED - PREMIUM QUALITY RARE ITEM",
        "Price"=>420400,
        "StokItem"=>60,
        "Picture"=>"PA1.jpg"
    ]
];

function rupiahIDR($uang){
    return "Rp" . number_format($uang,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOTA 2  4 ITEMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Stok Item</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["Name"]; ?></td>
                    <td><?= $barang["Description"]; ?></td>
                    <td><?= $barang["Detail"]; ?></td>
                    <td><?= rupiahIDR($barang["Price"]) ?></td>
                    <td><?= $barang["StokItem"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["Picture"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>