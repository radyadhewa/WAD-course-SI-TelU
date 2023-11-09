<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$database = "wad_week7";

$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$category = $_POST["category"];
$description = $_POST["description"];
$source = $_POST["source"];
$date = $_POST["date"];
$total = $_POST["total"];

$sql = "INSERT INTO data_keuangan(category, description, source, date, total) 
        VALUES ('$category', '$description', '$source', '$date', '$total')";

if (mysqli_query($conn, $sql)) {
  echo "Pengeluaranmu berhasil tercatat!";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>