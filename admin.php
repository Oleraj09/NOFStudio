<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>NOF Studio-Admin Panel</title>
   <link rel="stylesheet" href="homepage.css" type="text/css">
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
  <br><br>
  <div class="container">

         <div class="jumbotron">
           <h1> Enter the Movie details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Movie Name" name="mname" value=""><br>
             <input type="text" class="form-control" placeholder="Year of Release" name="release" value="">
             <br>
             <!-- <input type="text" class="form-control" placeholder="Genre" name="genre" value=""> -->
             <select class="form-control" name='genre'>
                     <option selected>Category List</option>
                     <option value='bangla'>Bangla Movie</option>
                     <option value='english'>English Movie</option>
                     <option value='hindi'>Hindi movie</option>
                     <option value='otherm'>Forigen Movie</option>
                     <option value='tiktok'>Tiktok Videos</option>
                     <option value='music'>Music Videos</option>
                     <option value='fiction'>Fiction Movie</option>
                     <option value='horror'>Horror Movie</option>
                     <option value='animation'>Animation Movie</option>
                     <option value='tvb'>Bangla Serise</option>
                     <option value='tve'>English Serise</option>
                     <option value='tvh'>Hindi Serise</option>
                     <option value='tvo'>Other Serise</option>
                 </select>
             <br>
             <input type="number" class="form-control" placeholder="Runtime in minutes" name="rtime" value="">
             <br>
             <input type="text" class="form-control" placeholder="Description..." name="desc" value="">
             <br>
             <div class="row">
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Image : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="100000">

                              <input type="file" name="image" value="">
                          </div>
                     </td>
                   </tr>
                 </table>
               </div>
               <div class="col">
                 <table>
                   <tr>
                     <td> <label for=""><b>Upload Video : </b></label> </td>
                     <td>
                          <div class="">
                              <input type="hidden" name="size" value="30000000">

                              <input type="file" name="video" value="">
                          </div>
                     </td>
                   </tr>
                 </table>

               </div>
             </div> <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>
           </form>
        </div>
         </div>
       </div>
   </div>

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
