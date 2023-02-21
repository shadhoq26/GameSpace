<?php
include_once "database.php";
//if statement for an error saying that no username and password has been entered.
if (!isset($_POST['Username']) && !isset($_POST['password'])){
    $message= "Username and Password is required";
    header("Location: Login.php?e=$message");
    exit();
//Sets variable for Username and password.
}else{
    $userName = $_POST['Username'];
    $password = $_POST['password'];
}   
//if statement saying if the Username is not entered then it sends you back to the page with an error message. 
if (empty($userName)) {
    $message = "Username is required";
    header("Location: Login.php?e=$message");
    exit();
//if statement saying if the password is not entered then it sends you back to the page with an error message. 
} else if (empty($password)) {
    $message= "Password is required";
    header("Location: Login.php?e=$message");
    exit();
}
//if statement for the user to enter a password that matches their Username on the database.
$query = $database->query("SELECT * FROM accounts WHERE Username='$userName'");
if ($query->rowCount() > 0){
    $accounts = $query->fetchObject();
    //If the password is correct then they will proceed to the index page as usual.
    if (password_verify($password, $accounts->Password)) {
        session_start();
        $_SESSION['accounts']= $accounts;
        header("Location: profilepage.php");
        exit();
    //if the password is incorrect they will be sent back to the page with an error message.       
    }else{
        $message="Password is incorrect";
        header("Location: Login.php?e=$message");
        exit();
    }
//if the Username is incorrect they will be sent back to the page with an error message.  
}else{
    $message ="Username is incorrect";
    header("Location: Login.php?e=$message");
    exit();
}