<!-- Starts the session  -->
<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <title> GameSpace </title>
        <link rel= "Stylesheet" type= "text/css" href = "css/index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>    
        <!-- <h2 id="watermark"> Website created by Shadman Hoque </h2>       -->
        <div class = "header">
            <div id= "titleContainer">
                <img id="GameSpaceLogo" src="resources/spaceship1.png">
                <h1 id =  "title" >  GameSpace  </h1>
            </div>
                <!-- Container for all the buttons -->
                <div id= "container-for-buttons"> 
                    <a href ="index.php" class= "header-buttons"> Home</a>                      
                    <a href ="Genre.php" class= "header-buttons"> Genre</a> 
                    <a href ="ContactUs.php" class= "header-buttons"> About Us</a>
                    <a href ="Top10Games.php" class= "header-buttons"> Top 10 Games</a> 
                
                <?php
                    if (isset($_SESSION['user'])) {
                ?>
                        <a href ="profilepage.php" class= "header-login-button"> Profile</a>
                        <a href ="logoutscript.php"  class= "header-login-button"> Logout</a>
                    <?php
                    }else{
                    ?>
                        <a href ="Loginpage.php" class= "header-login-button"> Login</a>
                        <a href ="SignUppage.php" class = "header-login-button"> Sign up</a>
                    <?php
                    }
                ?>
                    


                <div id= search-results-container>
                    <form action="searchResultspage.php" method="GET">
                        <input id="searchbar" name="search" type="text" placeholder="Search">
                        <input id="searchbutton" type= "submit" value="Submit">
                        <!-- <button id="searchbutton" type= "submit" value="search"><span class="material-symbols-outlined">search</span></button> -->
                    </form>
                </div>                                           
        </div>
    </div>
    
</html>