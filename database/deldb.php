<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarsdb";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete database
$sql = "DROP DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname deleted successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();
?> 