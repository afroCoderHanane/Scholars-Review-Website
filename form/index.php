<style>
<?php
 include 'style.css';
?>
</style>

<?php
date_default_timezone_set('US/Eastern');

echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='username' value='".$_SESSION['username']."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br><br>
    <button type='submit' name='commentSubmit'>Comment</button>
</form>";
getComments($conn);

?>