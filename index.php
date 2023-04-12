<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/index.css">
<link rel= "Stylesheet" type= "text/css" href="css/gamebox.css">


<html>
    <body>
        <div id="main">
            <div id="box-container">
                <div id="first-container">
                    <!-- <div id="first-box"><h1 class="boxText">Automatic Slideshow</h1></div> -->
                    <head>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Auto slideshow</title>    
                    </head>
                        <div id= "first-box">
                            <div class="slide-container">
                                <div class="slide-wrapper">
                                    <img src="resources/slideshowimages/forzapic.jpg"> 
                                    <img src="resources/slideshowimages/eldenring.jpg">
                                    <img src="resources/slideshowimages/hogwarts-legacy-image.jpg">
                                    <img src="resources/slideshowimages/starwarsimage2.jpg">                         
                                </div>
                            </div>
                        </div>
                        
                        <div id="second-container">

                        <div id="third-box"> 
                            <div id="third-box-image">
                                <img src="resources/slideshowimages/starwarsimage2.jpg">  
                            </div> 
                            <div id="third-box-text">
                                <h2> DAILY NEWS </h2>              
                                <h4>STAR WARS: JEDI SURVIVOR</h4>
                                
                                <p> Unfortunately, most of BD-1's features in Star Wars Jedi: Fallen Order are relegated to roles that are outside of combat. The ziplines and light segments are location-specific and stim dispersal is just a unique animation that plays whenever Cal needs a quick pick-me-up.</p>
                                <p> <span> Author:</span> PandaMan202</p>
                            </div>
                        </div>
                        <div id="second-box" onclick="location.href='Community.php'"><h1 class="boxText">Community</h1></div>
                        
                    </div>
                </div>
            </div> 
            <div id="main3">
                <h1 id="indextitle"> New releases </h1>
                <div id= "block3-container">
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=13'" ><h1></h1><img src = "resources/GameImages/jedisurvivor.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=14'" ><h1></h1><img src = "resources/GameImages/forspoken.jpeg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=15'" ><h1></h1><img src = "resources/GameImages/deadisland2.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=5'" ><h1></h1><img src = "resources/GameImages/residentevil4.jpg"></div>   
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=6'" ><h1></h1><img src = "resources/GameImages/lastofus1.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=7'"><h1></h1><img src = "resources/GameImages/hogwarts.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=8'" ><h1></h1><img src = "resources/GameImages/MinecraftLegends.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=9'" ><h1></h1><img src = "resources/GameImages/sims4.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=10'" ><h1></h1><img src = "resources/GameImages/wolung.jpg"></div>
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=16'" ><h1></h1><img src = "resources/GameImages/sonsof.jpg"></div> 
                    <div class="block3" onclick = "location.href='ViewGamepage.php?id=11'" ><h1></h1><img src = "resources/GameImages/atomicheart.jpg"></div>  
                    <div class="block3"  onclick = "location.href='ViewGamepage.php?id=12'" ><h1></h1><img src = "resources/GameImages/wwe23.jpg"></div>
                </div>
            </div>
        </div> 
        <div id="backgroundImage"> </div>  
    </body>
</html>