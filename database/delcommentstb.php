<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarsdb";
$table = "comments";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete database
$sql = "DROP TABLE $table";
if ($conn->query($sql) === TRUE) {
    echo "Table $table deleted successfully";
} else {
    echo "Error delete table: " . $conn->error;
}


$conn->close();
?> 