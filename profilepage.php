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
            <div class="review-sort-container">
              <div id="view-review-container">
                <div id="review-image-container">
                  <img src="resources/GameImages/<?php echo $searchResults[$i]["Cover_Image"] ?>"/>
                </div>
                <div id="view-review-box">
                  <h1> Game Name </h1>
                  <p> Description:</p>
                  <p> Ratings: </p>
                  <p> Likes:</p>
                  <button>Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </body>
</html>