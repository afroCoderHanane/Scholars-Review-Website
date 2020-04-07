<!--<?php
session_start();
?>-->

<!DOCTYPE html>
<html lang ="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="X-UA-Compatible" content="ie=edge">
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">  
  <!--Google font-->
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Cormorant+Garamond&display=swap" rel="stylesheet">
  <!--custom stylesheet-->
  <link rel="stylesheet" href="CSS/style.css">
  <title>Scholars Home Page</title>

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
       <a href="#">Home</a>
    </li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
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
        <li><a href="#" class="logout">logout</a></li>
      </ul>
    
    </li>
   </ul>
  </header>

  <!--Page Wrapper-->
  <div class="page-wrapper">

  <!--Carrousel-->
    <div class="p_slider">

      <h1 class="slider-title">Trending Post</h1>
      <i class="fas fa-chevron-left next"></i>
      <i class="fas fa-chevron-right prev" ></i>

       <div class="p_wrap">

            <div class="post">1</div>
            <div class="post">2</div>
            <div class="post">3</div>
            <div class="post">4</div>
            <div class="post">5</div>

       </div>

    </div><!--Carroussel-->

  </div><!--Page wrapper-->
       <!-- old code 

 <div id = "main-wrapper">
     <center>
       <h2> Home Page </h2>
       <h3> Welcome <?php #echo $_SESSION['username']?></h3>
       <img src="logo_transparent.png" class= "avatar"/>
    </center>

<form class= "myform" action"index.php" method="post">
     
      <input name= "logout" type="submit" id="logout-btn" value ="log out"/><br>
      
</form>
<?php
/*if(isset($_POST['logout']))
 {
   session_destroy();
   header('location:login.php');
 }*/
?>
-->
</div>
<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!--Caroussel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--Script-->
<script src="JS/script.js">
</script>
</body>
</html>