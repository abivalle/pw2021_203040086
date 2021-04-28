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

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM itemdota WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $detail = htmlspecialchars($data['detail']);
    $price = htmlspecialchars($data['price']);
    $stokitem = htmlspecialchars($data['stokitem']);
    $picture = htmlspecialchars($data['picture']);

    $query = "UPDATE itemdota
            SET
            name = '$name',
            description = '$description',
            detail = '$detail',
            price = '$price',
            stokitem = '$stokitem',
            picture = '$picture',
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}




// <!-- <th>Name</th>
// <th>Description</th>
// <th>Detail</th>
// <th>Price</th>
// <th>StokItem</th>
// <th>Picture</th> -->