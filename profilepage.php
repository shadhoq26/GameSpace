<body>
<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/profilepage.css">

<div id="profileOuterContainer"> 
                    <div id="profileInnerContainer">
                        <h1> Your Profile </h1>
                        <p>First Name: <?=$_SESSION['accounts']->First_Name?></p>
                        <p>Last Name: <?=$_SESSION['accounts']->Last_Name?></p>
                        <p>Username: <?=$_SESSION['accounts']->Username?></p>
                        <p>Email: <?=$_SESSION['accounts']->Email?></p>
                    </div>
                </div>            
            </div>
</body>

