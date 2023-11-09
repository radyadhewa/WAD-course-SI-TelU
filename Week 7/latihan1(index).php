<?php
include('database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Pencatatan Keuangan</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Catatan Pengeluaran Harian mu!</h1>

  <button>
    <a href="latihan2.php" style="font-family: 'Montserrat'">Tambah Catatan Keuangan</a>
  </button>
  
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Edit</th>
      <th>Kategori</th>
      <th>Deskripsi Pengeluaran</th>
      <th>Sumber Keuangan</th>
      <th>Tanggal</th>
      <th>Jumlah Pengeluaran</th>
    </tr>

    <?php 
    $brg = query("SELECT * FROM data_keuangan");
    foreach ($brg as $row) : 
    ?>

    <tr>
      <td><?= $row['id']; ?></td>
      <td>
        <a href="#">Ubah</a>
        |
        <a href="#">Hapus</a>
      </td>
      <td style="text-align: center"><img src="assets\<?= $row['category']; ?>" alt="kategori belum dibuat" width="50px"></td>
      <td><?= $row['description']; ?></td>
      <td><?= $row['source']; ?></td>
      <td><?= $row['date']; ?></td>
      <td><?= $row['total']; ?></td>
    </tr>

    <?php 
    endforeach; 
    ?>

  </table>
</body>
</html>
