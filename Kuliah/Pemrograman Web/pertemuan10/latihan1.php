<?php
// koneksi ke DB & pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array assoc
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel mahasiswa
$mahasiswa = $rows
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>NPM</th>
      <th>Prodi</th>
      <th>Email</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $m['gambar']; ?>"></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['npm']; ?></td>
        <td><?= $m['prodi']; ?></td>
        <td><?= $m['email']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>