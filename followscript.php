<?php
session_start();
include "database.php";

if(!isset($_GET["user"])){
    header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid."&error= page error");
    exit();
}
$userpageid=$_GET["user"];

if(!isset($_GET["pageid"])){
    header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid."&error= page error");
    exit();
}
$pageid=$_GET["pageid"];


if(!isset($_SESSION["user"])){
    header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid."&error= Sign Up/Login to like this game.");
    exit();
}

$userID=$_SESSION["user"]->UserID;

if(!isset($_GET["follow"])){
    header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid."&error= Error has occured");
    exit();
}
$followID=$_GET["follow"];
if($userID==$followID){
    header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid."&error= Error has occured");
    exit();
}
$followCheck=$database->query("SELECT * FROM followers WHERE Follower_ID=$userID AND Followee_ID=$followID");

// if you are following them and delete follow
if($followCheck->rowCount()>0){
    $database->query("DELETE FROM followers WHERE Follower_ID=$userID AND Followee_ID=$followID");
}else{
    $database->query("INSERT INTO followers(Follower_ID,Followee_ID)VALUES('$userID','$followID')");   
}
header("location: viewprofilepage.php?user=".$userpageid."&pageid=".$pageid);
exit();