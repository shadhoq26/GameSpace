<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/loginpage.css"> -->


<html>
   <body>
      <div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="Loginscript.php"method= "post">
            <div class="field">
               <input type="text" name="Username" class="textbox">
               <label>Username</label>
            </div>
            <div class="field">
               <input type="Password" name= "password" class="textbox">
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Don't have an account ? <a href="SignUppage.php">Sign Up now</a>
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
            </div>
         </form>
      </div>
      <div id="login-background-image"> </div>
   </body>  
</html>
