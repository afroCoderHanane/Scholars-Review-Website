<?php

//Set comments to database
function setComments($conn){
    if(isset($_POST['commentSubmit'])){
        $userid = $_POST['username'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments (userid, date, message) VALUES ('$userid', '$date', '$message')";
       
        //Connect to the database
        $result = $conn->query($sql);
    }
}

//Retrieve comments from database
function getComments($conn){
    $table = "comments";    
    
    $userid = "userid";
    $date = "date";
    $message = "message";
    //Select all the data from the table
    $sql = "SELECT * FROM ".$table."";

    //Connect to the database
    $result = $conn->query($sql);

    //Retrieves all the data from the table and store in array
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row["$userid"]."<br>";
            echo $row["$date"]."<br>";
            echo nl2br($row["$message"]."<br>");

            echo "</div>";
        }
}


