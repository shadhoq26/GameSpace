<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/signup.css">

<!-- Contains all input boxes so the user will be able to sign up by entering their details -->
<div id= "signupContainer">
    <form action = "signup.php" method= "post">
        <h1>Sign Up</h1> <br>
        <input type="text" name="firstName" placeholder="First Name" class="textbox">
        <input type="text" name="lastName" placeholder="Last Name"class="textbox">
        <input type="text" name="userName" placeholder="Username"class="textbox">
        <input type="text" name="email" placeholder="Email"class="textbox">
        <input type="text" name="password" placeholder="Password"class="textbox">
        
        <!-- If the sign up details are wrong and the user tries to submit, an error message will appear stating the error -->
        <div id="submitButtonContainer">
            <input type="submit" name="submit" value="Confirm" id="submitButton"> 
           <!-- <input type="submit" name="submit" value="Already a user ?" id="LoginPage"> -->
            <a href ="Login.php" class= "buttons"> Already a user ?</a>
        </div>
        
        <?php if (isset($_GET['e'])) { ?>
            <p id="error1"><?=$_GET['e']?></p> 
        <?php
            }
        ?>   
    </form>
</div>