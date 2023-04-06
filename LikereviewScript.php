<?php
session_start();
include "database.php";

if(!isset($_POST["pageID"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= page error");
    exit();
}
$pageid=$_POST["pageID"];

if(!isset($_SESSION["user"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Sign Up/Login to like this game.");
    exit();
}

$userID=$_SESSION["user"]->UserID;

if(!isset($_POST["reviewID"])){
    header("location: ViewGamepage.php?id=".$pageid."&error= Error has occured");
    exit();
}
$reviewID=$_POST["reviewID"];
$likeCheck=$database->query("SELECT * FROM likes WHERE User_ID=$userID AND Review_ID=$reviewID");


if($likeCheck->rowCount()>0){
    $database->query("DELETE FROM likes WHERE User_ID=$userID AND Review_ID=$reviewID");
}else{
    $database->query("INSERT INTO likes(User_ID,Review_ID)VALUES('$userID','$reviewID')");   
}
header("location: ViewGamepage.php?id=".$pageid);
exit();