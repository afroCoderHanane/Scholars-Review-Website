 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "commentsection";
 
 $conn = mysqli_connect($servername, $username, $password,$dbname);
 //Create tables
  $sql = "CREATE TABLE comments (
 	Cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
     uid varchar(128) not null,
    date datetime not null,
     message TEXT not null
 )";
 if ($conn->query($sql) === TRUE) {
     echo "Tables created successfully";
 } else {
     echo "Error creating tables: " . $conn->error;
 }
$conn->close();
?> 