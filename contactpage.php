<!DOCTYPE html>
<html lang ="en">

<head>
<body>
<meta charset="utf-8">
 <script src="JS/scriptcounter.js"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="X-UA-Compatible" content="ie=edge">

  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">  

  <!--Google font-->
  <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Cormorant+Garamond&display=swap" rel="stylesheet">

  <!--custom stylesheet -->
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/form-css.css">


  <title>Contact Us</title>
  
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
      <form class = "form" action="contactform.php" method= "post">
        <h2 class ="title"> Contact Us </h2>
        <p class="name">
          <label id= "label1"for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="John Doe">
        </p>

          <p class="email">
          <label id="label1"for="email">Email</label>
          <input type="text" name="email" id="email" placeholder="mail@example.com">
        </p>

        <p class="titl">
          <label id="label1" for="name">Title</label>
          <input type="text" name="titl" id="titl" placeholder="Title">
        </p>

        <!-- Text area for user adjust the input place as he/she wants -->
        <p class="text">
          <label for="message">Message</label>
          <textarea name="message" onkeyup="countChars(this);" placeholder="Write something" maxlength="500"></textarea>
        </p>
        <p id="charNum">0 characters</p>
        <p class="submit">
          <input type="submit" value="Send"></p>

      </form>
    </body>

</body>
</html>

