<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$database = "wad_week7";

$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$id = $_POST['id'];
$category = $_POST['category'];
$description = $_POST['description'];
$source = $_POST['source'];
$date = $_POST['date'];
$total = $_POST['total']; 

// SQL query to update the data in the database
$sql = "UPDATE data_keuangan SET category = '$category', description = '$description', source = '$source', date = $date, total = '$total' WHERE id = $id;";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>