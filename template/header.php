
<!DOCTYPE html>
<html lang ="en">

<head>
<meta charset="utf-8">
 <script src="JS/scriptcounter.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="X-UA-Compatible" content="ie=edge">

  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">  
  <script src="https://kit.fontawesome.com/f0e157d390.js" crossorigin="anonymous"></script>

  <!--Google font-->
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Cormorant+Garamond&display=swap" rel="stylesheet">

  <!--custom stylesheet -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/form-css.css">
  <link rel="stylesheet" type="text/css" href="CSS/footer.css">

</head>
<body>
  <header>
   <div class="logo">
     <h1 class="logo-text">
        <i class="fas fa-brain"></i>
        <span>Scholars</span> review
     </h1>
   </div>
   <i class="fa fa-bars menu-toggle"></i>
   <ul class="nav">
    <li>
       <a href="homepage.php">Home</a>
    </li>
    <li><a href="about.php">About</a></li>
    <li><a href="contactpage.php">Services</a></li>
   <!-- <li><a href="#">Sign up</a></li>
    <li><a href="#">Login</a></li>-->
    <li>
      <a href="#">
      <i class= "fa fa-user"></i>
        User
      <i class= "fa fa-chevron-down" style="font-size: .8em;"></i>
      </a>
      
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="logout.php" class="logout">logout</a></li>
      </ul>
    
    </li>
   </ul>
  </header>
</body>

<?php
session_start();
//Check if user is logged in
if (isset($_SESSION['username'])) {
    echo "You are logged in!";
} else {
    echo "You are NOT logged in!";
    header('location:login.php');
  }
?>
