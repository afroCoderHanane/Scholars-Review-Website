<?php

$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['titl'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "yipguoli123@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

header("Location: contactpage.php?mailsend");
?>