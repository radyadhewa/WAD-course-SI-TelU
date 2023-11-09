<?php
require('database_connection.php');

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Redirect to the main page if 'id' is not provided
    header("Location: latihan3.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hapus Data Catatan Keuangan</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Hapus Laporan Keuangan yang Telah Tercatat!</h1>
  <form action="database_connection6.php" method="POST">
    <ul>
        <li>
            Kamu sedang menghapus data dengan ID <?= $id; ?>
        </li>
        <li>
            <input type="hidden" name="id" value="<?= $id; ?>">
        </li>

        <li>
            <input type="submit" value="Hapus" id="Catat" style="font-family: 'Nunito';">
        </li>
        <li>
            <a href="C:\xampp\htdocs\WAD Class\WAD-course-SI-TelU\Week 7\latihan1(index).php">
                <input type="button" value="Kembali" style="font-family: 'Nunito'; background-color: red">
            </a>
        </li>
    </ul>
</form>
</body>
</html>