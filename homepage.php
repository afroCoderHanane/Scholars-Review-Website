<?php
session_start();
?>

<!DOCTYPE html>
<html lang ="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="X-UA-Compatible" content="ie=edge">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">  

  <title>Scholars Home Page</title>

<body>
  <header>
   <div class="logo">
     <h1 class="logo-text">
        <i class="fas fa-brain"></i>
        <span>Scholars</span> review
     </h1>
   </div>
   <i class="fa fa-bars"></i>
   <ul class="nav">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
   <!-- <li><a href="#">Sign up</a></li>
    <li><a href="#">Login</a></li>-->
    <li><a href="#">Home</a>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#" class="logout">lougout</a></li>
      </ul>
    
    </li>
   </ul>
  </header>
       <!-- old code -->

 <div id = "main-wrapper">
     <center>
       <h2> Home Page </h2>
       <h3> Welcome <?php echo $_SESSION['username']?></h3>
       <img src="logo_transparent.png" class= "avatar"/>
    </center>

<form class= "myform" action"index.php" method="post">
     
      <input name= "logout" type="submit" id="logout-btn" value ="log out"/><br>
      
</form>
<?php
if(isset($_POST['logout']))
 {
   session_destroy();
   header('location:login.php');
 }
?>-->
</div>
</body>
</html>