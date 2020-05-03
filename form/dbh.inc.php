<?php
//Connect to the database

$conn = mysqli_connect('localhost','root','','scholarsdb');

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>