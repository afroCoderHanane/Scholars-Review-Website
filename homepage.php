<!--<?php
session_start();
?>-->

<?php include ('template/header.php');
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

      <div class="main-content"> <!--Main content-->
      <h1 class="recent-post-title">Recent Post</h1>
       <div class="post">
         <img src="pic/math.jpg" alt="" class="post-image">
         <div class="post-preview">
           <h2>
             <a href="single.php">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs
               
             </a> </h2>
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

        <div class="post">
         <img src="pic/math.jpg" alt="" class="post-image">
         <div class="post-preview">
           <h2>
             <a href="single.php">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs
               
             </a> </h2>
             <i class="far fa-user">User</i>
             &nbsp;
             <i class="far calendar">April 22,2020</i>
             <p class="preview-text">
                hdshjbhdsf wdhbsdjj dfbjdsb  djfbdsxh dsbjcs dhbsj sd sbsxv ha
                jhsbsjb fjjdjjdnncdkksdnfnvjfkdkjdkxlkdnmdkkkdkkdk fhdjnfnkfjn
                jfjkdklsjfkdkljfjkdkdl

             </p>
             <a href="single.php" class="btn read-more">Read more</a>
           <!--  <a href="single.html" class="btn reply">Reply</a>-->
         </div> 
        </div>

        <div class="post">
         <img src="pic/math.jpg" alt="" class="post-image">
         <div class="post-preview">
           <h2>
             <a href="single.php">shvjsvbvjdbjdsvgsdvdsjgvcdhscbxvdbsvhjchs
               
             </a> </h2>
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
       

      </div><!-- end Main content-->
      <!--Sidebar-->
      <div class="sidebar">
        <div class="section search">
             <h2 class="section-title">Search</h2>
             <form action="homepage.php" method="post">
               <input type="text" name="search-term" class="text-input" placeholder="Search...">
             </form>
        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Calculus</a></li>
            <li><a href="#">Intro to Comp. Sci.</a></li>
            <li><a href="#">Advanced programming</a></li>
            <li><a href="#">Intro to litterature</a></li>
            <li><a href="#">English Comp.</a></li>
            <li><a href="#">Data Structures</a></li>
            <li><a href="#">Biology</a></li>
            <li><a href="#">Physics</a></li>
          </ul>
        </div>
      </div><!--End of sidebar-->

  
   
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

        <?php
          include('template/footpage.php');
        ?>
 
