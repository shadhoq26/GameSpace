<?php
include_once "database.php";
//if statement which states if a first name isn't entered an error box will appearing saying "A first name is needed".
//You will be directed back to the sign up page.
if (empty($_POST['firstName'])) {
   $message= "A first name is needed";
   header("Location: SignUppage.php?e=$message");
   exit();
//if statement which states if a last name isn't entered an error box will appearing saying "A last name is needed".
//You will be directed back to the sign up page.
}else if (empty($_POST['lastName'])) {
   $message ="A last name is needed";
   header("Location: SignUppage.php?e=$message");
   exit();
}else if (empty($_POST['userName'])){
    $message= "An email is needed";
    header("Location: SignUppage.php?e= $message");
    exit();
//if statement which states if an email isn't entered an error box will appearing saying "An email is needed".
//You will be directed back to the sign up page.   
}else if (empty($_POST['email'])){
   $message= "An email is needed";
   header("Location: SignUppage.php?e= $message");
   exit();
//if statement which states if a password isn't entered an error box will appearing saying "A password is needed". 
//You will be directed back to the sign up page.  
} else if (empty($_POST['password'])){
   $message = "A password is needed";
   header("Location: SignUppage.php?e=$message");
   exit();
//If it is not entered an error box will appear saying...
} else if (!str_contains($_POST['email'],"@")){
  $message = "An email is need to proceed";
  header("Location: SignUppage.php?e=$message");
  exit(); 
}

//This is to set the variables for the first name, last name, username, email, password.
$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$userName= $_POST['userName'];
$email=$_POST['email'];
$password=$_POST['password'];


//If statement which states that a user cannot enter an email that already exists on the system. 
//If they enter a new email it will sign up the user and return back to the index page.
$userWithEmail = $database -> query("SELECT * FROM accounts WHERE Email= '$email'");
if ($userWithEmail -> rowCount()> 0) {
   $message= "user with that email already exists";
   header("Location: SignUppage.php?e=$message");
   exit();
}
$userWithUsername = $database -> query("SELECT * FROM accounts WHERE Username= '$userName'");
if ($userWithUsername -> rowCount()> 0) {
   $message= "user with this username already exists";
   header("Location: SignUppage.php?e=$message");
   exit();
}
//This means that the user with a new email, that isnt already on the database, will be able to open an account.  

$password = password_hash($password, PASSWORD_DEFAULT);
$database->query ("INSERT INTO accounts(first_Name, Last_Name, Username, Email, Password)
VALUES ('$firstName', '$lastName', '$userName','$email','$password')");
header("Location: Loginpage.php");
exit();
 