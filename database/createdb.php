<?php

//Create database

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


// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database $dbname created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";


$conn->close();
?> 