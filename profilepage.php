<!DOCTYPE html>
<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/profilepage.css">

<html>
  <?php
  include "database.php";
  if(!isset($_SESSION["user"])){
        header("location:loginpage.php");
        exit();
      }
      $userID=$_SESSION["user"]->UserID;
      ?>
      <body>
        <div id="profile-outer-container">
          <div class="profile-container">
            <div class="image-container">
              <img src="resources/user.png"/>
              <div id="follow-container">
              <div id="follow">
                <h1><?=$_SESSION['user']->Username?></h1>
                <p> <span id="text1">421</span> <span> Followers </span></p>
                <p><span id="text1">20<span> Following</span></p>           
              </div>
            </div>
            </div>        
            <div id="personal-info">
              <p><span>First Name: </span><?=$_SESSION['user']->First_Name?></p>
              <p><span>Last Name: </span><?=$_SESSION['user']->Last_Name?></p>
              <p><span>Email: </span><?=$_SESSION['user']->Email?></p> 
            </div>
            <div id="bio">
              <p>
                <span>Bio: </span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquamerat volutpat. Morbi imperdiet, mauris ac auctor dictum, nislligula egestas nulla.
              </p>
              <button> Edit Bio </button>  
            </div>
          </div>
          <div id="profile-second-container">
          <div>
            <div id="sort-text">
              <h1>My Reviews</h1>
              <button> All Reviews </button>
              <button> Newest Reviews </button>
              <button> Popular Reviews </button>
              <button> Oldest Reviews</button>
            </div>
            <?php
            $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN review_owner AS ro ON r.Review_ID=ro.Review_ID AND ro.User_ID='$userID'");
            $reviews=$reviews->fetchAll();
            for($i=0;$i<count($reviews);$i++){
              $reviewID=$reviews[$i]["Review_ID"];
              $gameData=$database->query("SELECT g.* FROM games AS g INNER JOIN game_review AS gr ON g.game_ID=gr.game_ID AND gr.Review_ID='$reviewID'");
              $gameData=$gameData->fetchObject();
              
              $likes=$database->query("SELECT SUM(Review_ID=$reviewID) AS reviewCount FROM likes");
              $likes=$likes->fetchObject();
            ?>
            <div class="review-sort-container">
              <div id="view-review-container">
                <div id="review-image-container">
                  <img src="resources/GameImages/<?php echo $gameData->Cover_Image?>"/>
                </div>
                <div id="view-review-box">
                  <h1><?php echo $gameData->Name?></h1>
                  <p> Description: <?php echo $reviews[$i]["reviews"] ?></p>
                  <p> Ratings: <?php echo $reviews[$i]["ratings"] ?> </p>
                  <p> Likes: <?php echo $likes->reviewCount?></p>
                  <button>Edit</button>
                  <button>Delete Review</button>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
        </div>
      </body>
</html>