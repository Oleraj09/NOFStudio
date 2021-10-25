<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>NOF Studio-Account Section</title>
   <link rel="stylesheet" href="account.css" type="text/css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body>
     <header>

         <div class="navbar">
            <div class="navbar-brand"> <img src="images/logo.png" alt=""> </div>

             <div class="subnav">
                <a href="homepage.php" class="nav-link"><b>Home</b></a>
                <a href='logout.php' class='nav-link'><b>Logout</b></a>
            </div>




      </header>

      <div class="contact-boxs">
        <div class="bordera">
          <div class="namea">Account Area</div>
          <?php
              include 'database.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);

      echo"  <form  action='update.php' method='POST'>

          <br><br><div class='set'><input type='text' class='form-control' placeholder='Enter full name' name='fname' value='".ucwords($result['name'])."'></div>
          <br>
          <div class='set'><input type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='".$result['phone']."'></div>
          <br>
          <center><b>Date of Birth : </b></center>
          <div class='set'><input type='text' class='from-control' placeholder='Enter Date of Birth' name='dob' value='".$result['DOB']."'></div><br><br>

              <div class='signupbutton'>
               
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>
                
              </div>
              </form>


              <br><br>
              <br><label><b>Email Id : </b>".$result['email']."</label>
              <br><br>
              <button type='submit' class='btn'><a href='accountp.php'>Change Password</a></button>
              <br>
              <br>
              <br><br>

              ";
         ?>

        </div>
      </div>

      <br><br>
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
    </body>

  </html>
