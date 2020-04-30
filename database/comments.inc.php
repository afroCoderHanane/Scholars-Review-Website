<?php

function setComments($conn) {
    if (isset($_POST['commentSubmit']))
    {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    while( $row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br(stripslashes($row['message']));
            echo "</p>
            <form class='edit-form' method='POST' action='editcomment.php'>
                <input type='hidden' name='Cid' value='".$row['Cid']."'>
                <input type='hidden' name='uid' value='".$row['uid']."'>
                <input type='hidden' name='date' value='".$row['date']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Edit</button>
            </form>
            </div>";
    }
}

function editComments($conn) {
    if (isset($_POST['commentSubmit']))
    {
        $Cid = $_POST['Cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "UPDATE comments SET message='$message' WHERE Cid='$Cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
}