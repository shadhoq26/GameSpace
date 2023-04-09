<!DOCTYPE html>
<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/profilepage.css">

<html>
  <?php
  include "database.php";
  if(!isset($_GET["pageid"])){
    header("location: index.php");
    exit();
  }

  $pageid=trim($_GET["pageid"]);
  

  if(!isset($_GET["user"])){
    header("location: Viewgamepage.php?id=$pageid");
    exit();
  }

  $username=trim($_GET["user"]);
  $userdata=$database->query("SELECT * FROM accounts WHERE Username='$username'");
  if($userdata->rowCount()==1){
    $userdata=$userdata->fetchObject();

  }else{
    header("location: Viewgamepage.php?id=$pageid");
    exit();
  }
  ?> 
  <body>
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="resources/bg.jpeg"/>
          </div>
          <h2> <?=$userdata->Username?></h2>   
          <p>First Name: <?=$userdata->First_Name?></p>
          <p>Last Name: <?=$userdata->Last_Name?></p>
          <p>Email: <?=$userdata->Email?></p> 

          <ul class="about">
            <li><span>4,073</span>Followers</li>
            <li><span>322</span>Following</li>         
          </ul>

          <div class="content">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
              erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
              ligula egestas nulla.
            </p>
        
            <hr>
            <h2>My Top 5 Games</h2>
            <div id="main-5game-container">
                <div id="top-5game-container">
                    <div class="third-5game-container">
                    <p> hi</p>
                    </div>
                    <div class="third-5game-container">
                    <p> hi</p>
                    </div>
                    <div class="third-5game-container">
                    <p> hi</p>
                    </div>
                </div>
                <div id="bottom-5game-container">
                    <div id="bottom-inner5game-container">
                    <div class="third-5game-container">
                    <p> hi</p>
                    </div>
                    <div class="third-5game-container">
                    <p> hi</p>
                    </div>
                    </div>
                </div>

            </div>  

          </div>
        </div>
        <div class="right__col">
          <nav>
          <button>Follow</button>
            <ul>
              <li><a href="">My Reviews</a></li>
              <li><a href="">Newest Reviews</a></li>
              <li><a href="">Popular Reviews</a></li>
              <li><a href="">Oldest Reviews</a></li>
            </ul>
          </nav> 
          <div id="review-container">
          <div id="review-container">
          <h1> Game Name: </h1>
          <p> Description:</p>
          <p> Ratings: </p>
          <p> Likes:</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>