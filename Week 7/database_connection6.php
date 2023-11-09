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


// SQL query to insert the data into the database
$sql = "DELETE FROM data_keuangan WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    echo "Data deleted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>