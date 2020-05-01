
<?php
$title="Admin Section- Manage Topic";
session_start();
//Check if user is logged in
if (isset($_SESSION['username'])) {
} else {
    echo "You are NOT logged in!";
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang ="en">

<head>
<meta charset="utf-8">
 <script src="JS/scriptcounter.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="X-UA-Compatible" content="ie=edge">
 <title><?php $title?></title>
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
  <link rel="stylesheet" href="../../CSS/style.css">
  <link rel="stylesheet" href="../../CSS/footer.css">
  <link rel="stylesheet" href="../../CSS/admin.css">
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
       <a href="../../homepage.php">Home</a>
    </li>
    <li><a href="../../about.php">About</a></li>
    <li><a href="../../contactpage.php">Services</a></li>
   <!-- <li><a href="#">Sign up</a></li>
    <li><a href="#">Login</a></li>-->
    <li>
      <a href="#">
      <i class= "fa fa-user"></i>
        <?php echo $_SESSION['username']?>
      <i class= "fa fa-chevron-down" style="font-size: .8em;"></i>
      </a>
      
      <ul>
        
        <li><a href="logout.php" class="logout">logout</a></li>
      </ul>
    
    </li>
   </ul>
  </header>
<div class="admin-wrapper">
  <!--left sidebar-->  
 <div class="left-sidebar">
   <ul>
       <li><a href="../posts/index.php"> Manage Topic</a></li>
       <li><a href="../users/index.php">Users iterface</a></li>
       <li><a href="index.php"> Manage Topics</a></li>
   </ul>
 </div>  <!--//left sidebar-->  
 <!--Admin content-->  
 <div class="admin-content">
    <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Topic</a>
        <a href="index.php" class="btn btn-big">Manage Topics</a>
    </div>
    <div class="content">
        <h2 class="page-title">Manage Topics</h2>
         <table>
             <thead>
                 <th>id</th>
                 <th>Name</th>
                 
                 <th colspan="2">Action</th>
             </thead>
             <tbody>
                 <tr>
                     <td>1</td>
                     <td>Post 1</td>
                     <td><a href="#" class="edit">Edit</a></td>
                     <td><a href="#" class="delete">Delete</a></td>
                     
                 </tr>

                 <tr>
                     <td>2</td>
                     <td>Post 2</td>
                     <td><a href="#" class="edit">Edit</a></td>
                     <td><a href="#" class="delete">Delete</a></td>
                 </tr>
             </tbody>
         </table>
   </div>
 </div> <!--End admin content-->  
</div> <!--End-->  




<footer>
  <div class="footer">
      <div class="inner_footer">
          <div class="logo_container">
             <img class="footer-logo"><i class="fas fa-brain"></i></img>
             <h2 class="footer-heading"> <span>Scholars</span> Review </h2>
             &nbsp
            <h4>  &copy Copyright 2020, All right reserved <h4>

          </div>

          <div class="footer_third">
              <h1>Need Help?</h1>
              <a href="#">Terms &amp; Conditions</a>
              <a href="#">Privacy Policy</a>
          </div>

          <div class="footer_third">
              <h1>More Learning Resources</h1>
              <a href="https://www.edx.org/">Edx</a>
              <a href="https://www.coursera.org"><i class="fas fa-infinity"> Coursera</i></a>
              <a href="http://tutorial.math.lamar.edu/">Math Online</a>

          </div>  

          <div class="footer_third">
              <h1>Follow Us</h1>
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
          <span>
              
              Borough of Manhattan Community College<br>
              199 Chambers St, <br>
              New York, NY 10007 <br>
              USA 
          </span>
        </div>

    </div>
  </div>
</footer>
<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!--Caroussel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--Script-->
<script src="JS/script.js"></script>


</body>
</html>

