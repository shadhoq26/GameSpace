<?php
session_start();
include "database.php";
$pageid=$_POST["id"];
$userID=$_SESSION["user"]->UserID;
if(!isset($_POST["description"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Please enter a description for the review.");
    exit();
}

if(empty($_POST["description"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Please enter a description for the review.");
    exit();
}

if(!isset($_POST["rating"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Please choose a rating for this game");
    exit();
}

if(empty($_POST["rating"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Please choose a rating for this game");
    exit();
}
$description=$_POST["description"];
$rating=$_POST["rating"];

$userReviews=$database->query("SELECT * FROM review_owner WHERE User_ID=$userID");
$userReviews=$userReviews->fetchAll();
foreach($userReviews as $review){
    $reviewID=$review["Review_ID"];
    $gameReview=$database->query("SELECT * FROM game_review WHERE review_ID=$reviewID AND game_ID=$pageid");
    if($gameReview->rowCount()>0){
        header("location: ViewGamepage.php?id=".$pageid."&error= Review has already been written for this game.");
        exit();  
    }
}

$database->query("INSERT INTO review(reviews,ratings)VALUES('$description','$rating')");
$reviewID=$database->lastInsertId();
$database->query("INSERT INTO game_review(Review_ID,game_ID)VALUES('$reviewID','$pageid')");
$database->query("INSERT INTO review_owner(Review_ID,User_ID)VALUES('$reviewID','$userID')");

header("location: ViewGamepage.php?id=".$pageid);