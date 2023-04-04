<?php include_once "header.php"?>

<link rel= "Stylesheet" type= "text/css" href="css/Loginpage.css">

    <div id="Loginpage">
        <!-- Login page textbox for entering the email and password and having a submit button -->
        <div id="loginContainer">  
            <form action="Loginscript.php"method= "post">
                <h1> Please Login to continue</h1> <br>
                <input type="text" placeholder= "Username" name="Username" class="textbox">   
                <input type="Password" placeholder= "Password" name= "password" class="textbox"> 
                <input type="submit" name="submit" value="Login" id="submitButton"> 
                <a href ="SignUppage.php" class= "buttons"> Don't have an account yet ?</a>
            <?php
            // If any errors occurs when logging in an error box will appear telling you what the error is.
            if (isset($_GET['e'])) {
            ?>
            <div id="errorOuterContainer">
                <div id="errorInnerCountainer">
                <p id="error2"><?=$_GET['e']?></p>
            </div>
        </div>
        <?php
        }
        ?>
        </form>
        </div>
    </div>