<!DOCTYPE html>
<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/profilepage.css">

<html>
  <?php
    if(!isset($_SESSION["user"])){
      header("location:loginpage.php");
      exit();
    }
  ?>
  <body>
    <div id="profile-outer-container">
    <div class="profile-container">
      
            <div class="image-container">
              <img src="resources/genre images/fighting2.jpg"/>
              <h1><?=$_SESSION['user']->Username?></h1>
            </div>
            <div id="follow">
              <p> <span id="text1">421</span> <span> Followers </span></p>
              <p><span id="text1"> 20 <span> Following</span></p>           
            </div>
            
            <p><span>First Name: </span><?=$_SESSION['user']->First_Name?></p>
            <p><span>Last Name: </span><?=$_SESSION['user']->Last_Name?></p>
            <p><span>Email: </span><?=$_SESSION['user']->Email?></p> 

            <div class="content">
              <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
              erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
              ligula egestas nulla.
              </p>  
            </div>
        </div>
    </div>
  </div>

    <div>
    <div class="review-sort-container">
          <nav>
            <ul>
              <li><a href="">My Reviews</a></li>
              <li><a href="">Newest Reviews</a></li>
              <li><a href="">Popular Reviews</a></li>
              <li><a href="">Oldest Reviews</a></li>
            </ul>
          </nav> 
          <div id="review-container">
            <h1> Game Name: </h1>
            <p> Description:</p>
            <p> Ratings: </p>
            <p> Likes:</p>
            <p> Disikes:</p>
            <button>Edit</button>
          </div>
        </div>
    </div>
  </body>
</html>