<?php
//This file creates a login table 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "scholarsdb";
 $tbname = "userinfotable";

 $conn = mysqli_connect($servername, $username, $password,$dbname);
 //Create tables
  $sql = "CREATE TABLE $tbname(
    userid int (11) not null AUTO_INCREMENT PRIMARY KEY,
    username varchar(128) not null,
    firstname varchar(128) not null,
    lastname varchar(128) not null,
    qualification varchar(128) not null,
    gender varchar(128) not null,
    password varchar(128) not null,
    role varchar(128) not null
)";

 if ($conn->query($sql) === TRUE) {
     echo "Table $tbname created successfully";
 } else {
     echo "Error creating table: " . $conn->error;
 }
$conn->close();
?> 