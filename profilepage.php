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
      // Counting how many people follow you
      $userID=$_SESSION["user"]->UserID;
      $followers=$database->query("SELECT SUM(Followee_ID=$userID) AS followers FROM followers");
      $followers=$followers->fetchObject();
      //Counting how many people you follow.
      $following=$database->query("SELECT SUM(Follower_ID=$userID) AS following FROM followers");
      $following=$following->fetchObject();
      ?>
      <body>
        <div id="profile-outer-container">
          <div class="profile-container">
            <div class="image-container">
              <img src="resources/user.png"/>
              <div id="follow-container">
              <div id="follow">
                <!-- session used to store data on the web browser. User data and session storage -->
                <h1><?=$_SESSION['user']->Username?></h1>
                <p> <span id="text1"> <?=$followers->followers?> </span> <span> Followers </span></p>
                <p><span id="text1"> <?=$following->following?> <span> Following</span></p>             
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
                <span>Bio: </span> I love game.
              </p>
              <button> Edit Bio </button>  
            </div>
          </div>
          <div id="profile-second-container">
          <div>
            <div id="sort-text">
              <h1>My Reviews</h1>
              <button class="normalbutton"> Popular Reviews </button>
              <?php
              // By default in the database everything is sorted out by old
              if(isset($_GET["sort"])){
                $sort=$_GET["sort"];
                if($sort=="new"){
                  ?>
                  <button class="normalbutton" onclick="location.href='profilepage.php?sort=old'"> Oldest Reviews </button>
                  <button class="buttonhighlight" onclick="location.href='profilepage.php?sort=new'"> Newest Reviews </button>
                  <?php
                }else if($sort=="old"){
                  ?>
                  <button class="buttonhighlight" onclick="location.href='profilepage.php?sort=old'"> Oldest Reviews </button>
                  <button class="normalbutton" onclick="location.href='profilepage.php?sort=new'"> Newest Reviews </button>
                  <?php
                }
              }else{
                ?>
                <button class="buttonhighlight" onclick="location.href='profilepage.php?sort=old'"> Oldest Reviews </button>
                <button class="normalbutton" onclick="location.href='profilepage.php?sort=new'"> Newest Reviews </button>
                <?php
              }
              ?>
              <button class="normalbutton"> Top 5 games</button>  
            </div>
            <?php
            // Getting reviews from the View game page and displaying the specific users review on this page.
            $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN review_owner AS ro ON r.Review_ID=ro.Review_ID AND ro.User_ID='$userID'");
            $reviews=$reviews->fetchAll();
            if(isset($_GET["sort"])){
              $sort=$_GET["sort"];
              if($sort=="new"){
                // getting all the information for the review.
                for($i=count($reviews)-1;$i>-1;$i--){
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
                      <p><span> Description:</span> <?php echo $reviews[$i]["reviews"] ?></p>
                      <p><span> Ratings:<span> <?php echo $reviews[$i]["ratings"] ?> </p>
                      <p><span>Likes:<span> <?php echo $likes->reviewCount?></p>
                      <button>Edit</button>
                      <button>Delete Review</button>
                    </div>
                  </div>
                  <?php
                  }
              }else if($sort=="old"){
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
                      <!-- echo used to print out code into the website -->
                      <h1><?php echo $gameData->Name?></h1>
                      <p><span> Description:</span> <?php echo $reviews[$i]["reviews"] ?></p>
                      <p><span> Ratings:<span> <?php echo $reviews[$i]["ratings"] ?> </p>
                      <p><span>Likes:<span> <?php echo $likes->reviewCount?></p>
                      <button>Edit</button>
                      <button>Delete Review</button>
                    </div>
                  </div>
                  <?php
                  }
              }
            }else{
              // this is the default one
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
                    <p><span> Description:</span> <?php echo $reviews[$i]["reviews"] ?></p>
                    <p><span> Ratings:<span> <?php echo $reviews[$i]["ratings"] ?> </p>
                    <p> <span>Likes:<span> <?php echo $likes->reviewCount?></p>
                    <button>Edit</button>
                    <button>Delete Review</button>
                  </div>
                </div>
                <?php
                }
            }
          
              ?>
            </div>
          </div>
        </div>
        </div>
      </body>
</html>