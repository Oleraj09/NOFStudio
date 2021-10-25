
<?php
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>NOF STUDIO - Watch TV Shows Online, Watch Movies Online</title>
    </head>
  <body>
    <div class="container">
        <nav class="navbar sticky-top">
            <div class="left">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="right">
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-bars"></i></a>
                        <div class="overlay-content">
                            <a href="login.php">Login</a>
                            <a href="register.php">Register</a>
                            <a href="about.php">About</a>
                            <a href="contact.php">Contact</a>
                        </div>
                </div>
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-bars"></i></span>
            </div>
        </nav>
    </div>

        <div class="contact-box">
            <div class="logleft"></div>
            <div class="cright">
                <h2>Register Completed</h2>
                <h3>Please Login to account.</h3> <br>
                <form class="" action="actionlogin.php" method="POST"> <br><br>
                    <input type="email" class="field" placeholder="Usename/ Email Address" name="mail" value="">
                    <br>
                    <input type="password" class="field" placeholder="Password" name="pass" value="">
                    <br><br>
                    <div class="loginbutton">
                        <button type="submit" class="btn" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>

    <hr>
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
  	 				<li><a href="index.php#faqs">FAQ</a></li>
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
    <script src="faq.js"></script>
</body>
</html>
