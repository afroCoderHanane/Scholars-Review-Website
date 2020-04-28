<!--<?php
session_start();
?>-->

<?php include ('template/header.php');
?>

<!DOCTYPE html>
<html lang ="en">

<head>

<title>Scholars Home Page</title>
<body>
  <!-- Header of the page -->
  <!-- End of the header page -->

  <!--Page Wrapper-->
  <div class="page-wrapper">
      <div class="header">
        <?php include_once('template/header.php');
       ?>

  <!--Carrousel-->
    <div class="p_slider">
      <h1 class="slider-title">Trending Post</h1>
      <i class="fas fa-angle-double-left next"></i>
      <i class="fas fa-angle-double-right prev" ></i>

       <div class="p_wrap">

        <!--Post 1 on carrousel -->
            <div class="post">
              <img src="pic/math.jpg" alt="" class="s_images">
              <div class="infos">
                 <h4><a href="#">differentiable equation and Calculus II</a><h4>
                  <i class="far fa-user">User</i>
                  &nbsp;
                  <i class="far fa-calendar">April,7th</i>
              </div>
            </div>

        <!--Post 2 on carrousel -->
            <div class="post">
              <img src="pic/math.jpg" alt="" class="s_images">
              <div class="infos">
                 <h4>differentiable variable and <h4>
                  <i class="far fa-user">User</i>
                  &nbsp;
                  <i class="far fa-calendar">April,7th</i>            
              </div>
            </div>

        <!--Post 3 on carrousel -->
            <div class="post">
              <img src="pic/math.jpg" alt="" class="s_images">
              <div class="infos">
                 <h4>differentiable variable and <h4>
                  <i class="far fa-user">User</i>
                  &nbsp;
                  <i class="far fa-calendar">April,7th</i>            
              </div>
            </div>

        <!--Post 4 on carrousel -->
            <div class="post">
              <img src="pic/math.jpg" alt="" class="s_images">
              <div class="infos">
                 <h4>differentiable variable and <h4>
                  <i class="far fa-user">User</i>
                  &nbsp;
                  <i class="far fa-calendar">April,7th</i>            
              </div>
            </div>

        <!--Post 5 on carrousel -->
            <div class="post">
              <img src="pic/math.jpg" alt="" class="s_images">
              <div class="infos">
                 <h4>differentiable variable and <h4>
                  <i class="far fa-user">User</i>
                  &nbsp;
                  <i class="far fa-calendar">April,7th</i>            
              </div>
            </div>
       </div>
    </div>

     
    <!--Carroussel-->
    <!--Content-->
    <div class="content clearfix">

      <!--Main content-->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Post</h1>

        <!-- Post 1/Main page -->
          <div class="post">
             <img src="pic/math.jpg" alt="" class="post-image">
              <div class="post-preview">
                <h2>
                  <a href="single.html">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs</a> 
                </h2>
                  <i class="far fa-user">User</i>
                 &nbsp;
                  <i class="far calendar">April 22,2020</i>
                  <p class="preview-text">
                    hdshjbhdsf wdhbsdjj dfbjdsb  djfbdsxh dsbjcs dhbsj sd sbsxv ha
                    jhsbsjb fjjdjjdnncdkksdnfnvjfkdkjdkxlkdnmdkkkdkkdk fhdjnfnkfjn
                    jfjkdklsjfkdkljfjkdkdl
                  </p>
                  <a href="single.html" class="btn read-more">Read more</a>
              </div> 
          </div>

        <!-- Post 2/Main Page-->
          <div class="post">
            <img src="pic/math.jpg" alt="" class="post-image">
              <div class="post-preview">
                <h2>
                  <a href="single.html">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs</a>
                </h2>
                  <i class="far fa-user">User</i>
                &nbsp;
                  <i class="far calendar">April 22,2020</i>
                  <p class="preview-text">
                    hdshjbhdsf wdhbsdjj dfbjdsb  djfbdsxh dsbjcs dhbsj sd sbsxv ha
                    jhsbsjb fjjdjjdnncdkksdnfnvjfkdkjdkxlkdnmdkkkdkkdk fhdjnfnkfjn
                    jfjkdklsjfkdkljfjkdkdl
                  </p>
                  <a href="single.html" class="btn read-more">Read more</a>
              </div> 
          </div>


        <!-- Post 3/Main Page -->
          <div class="post">
            <img src="pic/math.jpg" alt="" class="post-image">
              <div class="post-preview">
                <h2>
                  <a href="single.html">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs</a>
                </h2>
                <i class="far fa-user">User</i>
                &nbsp;
                <i class="far calendar">April 22,2020</i>
                <p class="preview-text">
                  hdshjbhdsf wdhbsdjj dfbjdsb  djfbdsxh dsbjcs dhbsj sd sbsxv ha
                  jhsbsjb fjjdjjdnncdkksdnfnvjfkdkjdkxlkdnmdkkkdkkdk fhdjnfnkfjn
                  jfjkdklsjfkdkljfjkdkdl
                </p>
                <a href="single.html" class="btn read-more">Read more</a>
              </div> 
          </div>
      </div>
      <!-- end Main posts-->

      <!--Sidebar-->
      <div class="sidebar">
      </div>

  
   
    </div>
    <!--End of main content-->


  <!-- End Page wrapper-->
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

      <footer>
        <?php
          include('template/footpage.php');
        ?>
      <footer>



<!--JQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!--Caroussel-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--Script-->
<script src="JS/script.js">
</script>
</body>
</html>

