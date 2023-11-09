<?php
require('database_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Catatan Keuangan</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Catat Laporan Keuangan Hari Ini</h1>
  <form action="database_connection2.php" method="POST">
    <ul>
      <li>
        <label for="category" class="label">Kategori Pengeluaran : </label>
        <input type="text" name='category' id='category' class="input" required>
      </li>
      <li>
        <label for="description" class="label">Deskripsi Pengeluaran : </label>
        <input type="text" name='description' id='description' class="input" required>
      </li>
      <li>
        <label for="source" class="label">Sumber Keuangan : </label>
        <input type="text" name='source' id='source' class="input" required>
      </li>
      <li>
        <label for="date" class="label">Tanggal : </label>
        <input type="text" name='date' id='date' class="input" required>
      </li>
      <li>
        <label for="total" class="label">Total Pengeluaran : </label>
        <input type="text" name='total' id='total' class="input" required>
      </li>

      <input type="submit" value="Catat" id="Catat" style="font-family: 'Nunito';">
      
    </ul>

  </form>

  
</body>
</html>