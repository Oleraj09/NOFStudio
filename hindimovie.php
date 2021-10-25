<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>NOF Studio - Homepage</title>
  <style> img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;} 
  </style>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>
    <div class="navbar">
      <div class="navbar-brand"> <img src="images/logo.png" alt=""> </div>
      <div class="mobile">
      <div class="right">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-bars"></i></a>
                        <div class="overlay-content">
                            <a href="homepage.php">All Movies</a>
                            <a href="englishovie.php">English Movie</a>
                            <a href="hindimovie.php">Hindi Movie</a>
                            <a href="banglamovie.php">Bangla Movie</a>
                            <a href="othermovie.php">other Movie</a>
                            <a href="#">English Serise</a>
                            <a href="#p">Hindi Serise</a>
                            <a href="#">Bangla Serise</a>
                            <a href="#">Forigen Serise</a>
                            <a href="account.php">Account Area</a>
                            <a href="logout.php">Logout</a>
                        </div>
                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-bars fa-2x"></i></span>
        </div>
      </div>
      <div class="subnav">
        <a href="homepage.php" class="nav-link"><b>Home</b></a>
      </div>
      <div class="subnav">
    <button class="subnavbtn"><b>Movies</b> <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="englishmovie.php" class="nav-link"><b>English Movies</b></a>
      <a href="hindimovie.php" class="nav-link"><b>Hindi Movies</b></a>
      <a href="banglamovie.php" class="nav-link"><b>Bangla Movies</b></a>
      <a href="othermovie.php" class="nav-link"><b>Others</b></a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn"><b>Serise</b> <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
    <a href="#company" class="nav-link"><b>English Serise</b></a>
      <a href="#team" class="nav-link"><b>Hindi Serise</b></a>
      <a href="#careers" class="nav-link"><b>Bangla Serise</b></a>
      <a href="#careers" class="nav-link"><b>Others</b></a>
    </div>
  </div>
  <?php
     if (isset($_SESSION['id'])) {
       if ($_SESSION['id'] == 1) {
         echo "<div class='subnav'><a href='admin.php' class='nav-link'><b>Upload</b></a></div>";
           }
        }
    echo"<div class='subnav'><a href='account.php' class='nav-link'><b>Account</b></a></div>
    <div class='subnav'><a href='logout.php' class='nav-link'><b>Logout</b></a></div>
    
</div>

                  <div class='container-fluid'>
                  <br><br>";
                  include 'database.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
                  echo"<h1 style='color:black;position:sticky;'>WELCOME </h1><b style = 'color: black;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>";
                  ?>
     </header>
      
     <section>
          <div class="jumbotrons">
            <h2 style='margin-top:0px;padding-top:0px;'>Hindi Movies</h2>
              <div class="row">
              <?php
                include 'database.php';


                  $im = "SELECT * FROM movies WHERE genre LIKE 'hindi%'" ;
                  $records = mysqli_query($conn,$im);

                  start:
                  $i=0;

                  echo"<div class='row'>";
                    while($result = mysqli_fetch_assoc($records)){
                      echo"<form action='movie.php' method='POST'>";
                      echo"<div class='col'>";
                      echo "<img src='uploads/".$result['imgpath']."' height='250' width='200' style='margin-top: 30px;margin-left:15px;margin-right:15px;' />";
                        echo"<div class='noob'>";
                          echo "<input type='submit' name='submit' class='btn btn-outline-info' style='display:block;width:200px;padding-bottom:15px;margin-bottom:30px;margin-left:15px;margin-right:15px;' value='".ucwords($result['name'])."'/>";
                        echo"</div>";
                      echo"</div>";
                      echo"</form>";

                      if ($i==4) {

                        echo"</div>";

                        goto start;
                      }
                      $i++;
                    }
                    echo"</div>";
                    ?>


          </div>
      </div>

    </section>

    <footer class="footer">
  	 <div class="containerf">
  	 	<div class="row">
            <div class="footer-col">
  	 			<h4>Location</h4>
  	 			<h5>Mirpur 2 Near BUBT
                    Dhaka, Bangladesh.
                   </h5>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company</h4>
  	 			<ul>
                    <li><a href="index.php">Home</a></li>
  	 				<li><a href="about.php">About us</a></li>
  	 				<li><a href="services.php">Our services</a></li>  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Get Help</h4>
  	 			<ul>
  	 				<li><a href="#faqs">FAQ</a></li>
  	 				<li><a href="privacy.php">Privacy policy</a></li>
  	 				<li><a href="ourvission.php">Our Vision</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Quick Links</h4>
  	 			<div class="social-links">
                   <a href="https://www.facebook.com/NOF-Studion-271647551317518"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://oleraj09.github.io/"><i class="fab fa-edge-legacy"></i></a>
  	 				<a href="https://github.com/Oleraj09?tab=repositories"><i class="fab fa-github"></i></a>
  	 				<a href="https://www.youtube.com/channel/UCVIqS5QaJVgsOo8DJ4NSGsQ/videos"><i class="fab fa-youtube"></i></a>
  	 			</div>
  	 		</div> 
  	 	</div>
  	 </div>
    </footer>
    <script src="function.js"></script>
  </body>
</html>
