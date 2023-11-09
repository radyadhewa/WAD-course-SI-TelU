<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$database = "wad_week7";

$conn = mysqli_connect($host, $username, $password, $database);

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Failed to select database: " . mysqli_error($conn));
}


function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("Query failed: " . mysqli_error($conn) . "<br>SQL: " . $query);
  }

  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
  }
  return $rows;
}
?>