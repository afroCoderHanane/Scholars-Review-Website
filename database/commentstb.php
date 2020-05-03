 <?php
//This file create comments table

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "scholarsdb";
 $tbname = "comments";
 
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 //Create tables
  $sql = "CREATE TABLE $tbname (
 	commentid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    userid varchar(128) not null,
    date datetime not null,
     message TEXT not null
 )";
 if ($conn->query($sql) === TRUE) {
     echo "Table $tbname created successfully";
 } else {
     echo "Error creating tables: " . $conn->error;
 }
$conn->close();
?> 