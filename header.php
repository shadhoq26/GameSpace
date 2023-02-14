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
        <!-- <h2 id="watermark"> Website created by Shadman Hoque </h2>       -->
            <div id= "titleContainer"></div>
                <!-- Container for all the buttons -->
                <div id = "container-buttons"> 
                    <a href ="index.php" class= "header-buttons"> Home</a>
                    <?php
                        if (isset($_SESSION['user'])) {
                    ?>
                            <a href ="profilepage.php" class= "header-buttons"> Profile</a>
                        <?php
                        }else{
                        ?>
                            <a href ="SignUp-Login.php" class = "header-buttons"> Sign Up/Login</a>
                        <?php
                    }
                ?>                        
                    <a href ="Top10Games.php" class= "header-buttons"> Top 10 Games</a>  
                    <a href ="Genre.php" class= "header-buttons"> Genre</a> 
                    <a href ="ContactUs.php" class= "header-buttons"> Contact Us</a> 
                </div>
                
                <!--This will display the search bar -->
                <div>
                    <input id="searchbar" type="text" placeholder="Enter game title..">
                </div>
            </div>
    </div>