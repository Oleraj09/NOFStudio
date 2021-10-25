<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'database.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
      echo"<link href='https://vjs.zencdn.net/7.14.3/video-js.css' rel='stylesheet' />";
    echo"</head>";
    echo"<body>";
        echo"<div class='jumbotron-fluid'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
            echo "<br><br><h5 style='display: inline;'><br>Movie name     : </h5><h5 style='display: inline;'>".ucwords($result['name'])."</h5>";
            echo"<br><h5 style='display: inline;' >Genre          : </h5><h5 style='display: inline;'>".ucwords($result['genre'])."</h5>";
            echo"<br><h5 style='display: inline;' >Release year   : </h5><h5 style='display: inline;'>".$result['rdate']."</h5>";
            echo"<br><h5 style='display: inline;' >Description    : </h5><h5 style='display: inline;'>".ucfirst($result['decription'])."</h5>";
            echo"<br><h5 style='display: inline;' >Runtime        : </h5><h5 style='display: inline;'>".$result['runtime']." mins </h5>";
            echo"<br><h5 style='display: inline;' >Views          : </h5><h5 style='display: inline;'>".$result['viewers']."</h5>";

            echo"<br><br><br>";
            echo"<center> <video
    		      id='my-video'
   		        class='video-js'
    		      controls
    		      preload='auto'
    		      width='720'
    		      height='640'
    		      poster='uploads/".$result['imgpath']."'
    		      data-setup='{}'
  		        >
    		      <source src='video-uploads/".$result['videopath']."' />
    		      <p class='vjs-no-js'>To view this video please enable JavaScript, and consider upgrading to aweb browser that <a href='https://videojs.com/html5-video-support/' target='_blank'> supports HTML5 video </a>
    		      </p>
  		        </video>
		          </center>";
              echo"</div>";
        }
	      echo"<script src='https://vjs.zencdn.net/7.14.3/video.min.js'></script>";
        echo"</div>";
        echo"</div>";
        echo"</body>";
        echo"</html>";
}
?>
