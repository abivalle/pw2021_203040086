<?php 

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040086");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $detail = htmlspecialchars($data['detail']);
    $price = htmlspecialchars($data['price']);
    $stokitem = htmlspecialchars($data['stokitem']);
    $picture = htmlspecialchars($data['picture']);

    $query = "INSERT INTO itemdota 
                    VALUES 
                    ('','$name', '$description', '$detail', '$price', '$stokitem', '$picture')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// <!-- <th>Name</th>
// <th>Description</th>
// <th>Detail</th>
// <th>Price</th>
// <th>StokItem</th>
// <th>Picture</th> -->