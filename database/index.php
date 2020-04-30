<?php
    date_default_timezone_set('US/Eastern');
    include ('dbh.inc.php');
    include ('comments.inc.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="comment-style.css">
<title> Title of the document</title>
</head>

<body>


<?php
echo"<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>
</form>";

getComments($conn);
?>
</body>
</html>