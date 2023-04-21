<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/signup.css">.
<html>
   <body>
      <div class="wrapper">
         <div class="title">
            Sign Up
         </div>
         <form action="signupscript.php"method= "post">
            <div class="field">
               <input type="text" name="firstName" class="textbox">
               <label>First Name</label>
            </div>
            <div class="field">
               <input type="text" name="lastName" class="textbox">
               <label>Last Name</label>
            </div>
            <div class="field">
               <input type="text" name="userName" class="textbox">
               <label>Username</label>
            </div>
            <div class="field">
               <input type="email" name="email" class="textbox">
               <label>Email</label>
            </div>
            <div class="field">
               <input type="Password" name= "password" class="textbox">
               <label>Password</label>
            </div>
            
            <div class="field">
               <input type="submit" name="submit" value="Confirm" id="submitButton">
            </div>
            <div class="signup-link">
               Already have an account ? <a href="Loginpage.php"> Login</a>
               <?php if (isset($_GET['e'])) { ?>
                  <p id="error1"><?=$_GET['e']?></p> 
                  <?php
                  }
                  ?> 
                  </div>
               </form>
            </div>
         </div>
      <div id="signup-background-image"> </div>
   </body>
</html>