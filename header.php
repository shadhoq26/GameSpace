<!DOCTYPE html>
<?php session_start(); 
?>
<html>
    <head>
        <!-- Title for the website -->
        <title> GameSpace </title>
        <link rel= "Stylesheet" type= "text/css" href = "css/index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    
    <body> 
    <div class = "header">
        <img id="GameSpaceLogo" src="resources/spaceship1.png"> 
        <h1 id ="title" > GameSpace </h1>   
        <!-- <h2 id="watermark"> Website created by Shadman Hoque </h2>-->
            <div id= "titleContainer"></div>
                <!-- Container for all the buttons -->
                <div id = "container-buttons"> 
                    <a href ="index.php" class= "header-buttons"> Home</a>                    
                    <a href ="Top10Games.php" class= "header-buttons"> Top 10 Games</a>  
                    <a href ="Genre.php" class= "header-buttons"> Genre</a> 
                    <a href ="ContactUs.php" class= "header-buttons"> Contact Us</a> 
                    
                    <!-- Changes the buttons to profile and logout or login and signup depending on if the user is logged in -->
                    <?php
                    if (isset($_SESSION['accounts'])) {
                    ?>
                        <a href ="profilepage.php" class= "header-buttons"> Profile</a>
                        <a href ="logoutscript.php"  class= "header-buttons"> Logout</a>
                    <?php
                    }else{
                    ?>
                        <a href ="Login.php" class= "header-buttons"> Login</a>
                        <a href ="SignUp.php" class = "header-buttons"> Sign up</a>
                    <?php
                    }
                    ?>
                </div>
                <!--This will display the search bar -->
                <div>
                    <input id="searchbar" type="text" placeholder="Enter game title..">
                </div>
            </div>
    </div>