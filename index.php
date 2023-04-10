<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/index.css">
<link rel= "Stylesheet" type= "text/css" href="css/gamebox.css">

        <div id="main">
        
            <div id="box-container">
                <div id="first-container">
                    <!-- <div id="first-box"><h1 class="boxText">Automatic Slideshow</h1></div> -->
                    <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Auto slideshow</title>    
                    </head>
                        <body>
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
                    <div id="second-box" onclick="location.href='Community.php'"><h1 class="boxText">Community</h1></div>
                    <div id="third-box" onclick="location.href='News.php'"><h1 class="boxText">News</h1></div>
                </div>
                       <!-- Images that will be displayed under the boxes -->
            <!-- <div id="middle-image-container">
                <h1>New Releases</h1>
                <img src="imagesweb/index1.jpg">
                <img src="imagesweb/index3.jpg">
                <img src="imagesweb/index2.jpg">
                <img src="imagesweb/index5.jpg">
                <img src="imagesweb/index4.jpg">
                <img src="imagesweb/index7.jpg">
                <img src="imagesweb/index8.jpg">
                <img src="imagesweb/index8.jpg"> 
                <img src="imagesweb/index8.jpg">
                <img src="imagesweb/index8.jpg">  -->
            <!-- </div> -->
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