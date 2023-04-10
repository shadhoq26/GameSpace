<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/viewgamepage.css">

<html>
    <body>
            <div id="main">
            <?php
            include "database.php";
            if(isset($_GET["id"])){
                $gameID=$_GET["id"];
                $results=$database->query("SELECT * FROM games WHERE game_ID=$gameID");
                if($results->rowCount()==1){
                    $game=$results->fetchObject();
                }
                ?> 
                <div class="box-container">
                    <div id="first-container">
                        <div>
                            <img src="resources/GameImages/<?php echo $game-> Cover_Image?>"/>
                        </div>
                        <h1> <?php echo $game-> Name;?> </h1>
                        <p> Price:<?php echo $game-> Price;?></p>
                        <p> Genre:<?php echo $game-> Genre;?> </p>
                        <p> Platform:<?php echo $game-> Platform;?></p>
                        <p> Age Rating:<?php echo $game-> Age_Rating;?></p>
                        <!-- <p> <?php echo $game-> Information;?></p> -->
                        <a href="<?php echo $game-> Purchase_Link;?>"> Buy Now </a> 
                    </div>
                    <div id="second-container">
                        <h1> Rating: </h1>
                        <p> Rating Breakdown </p>
                        <div class="rating-breakdown-container">
                            <p> 10 (22) </p>
                            <div class="rating-breakdown-bar">
                                <div id="rating-bar-percentage">
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="bottom-container">           
                        <form id="reviewbox" action="makereview.php" method="post">
                            <h1> Write your review </h1>
                            <input type="text" name="description" placeholder="test">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                            <div class="radio_container">
                                <input type="radio" name="rating" value="1" id="rating1">
                                <label for="rating1">1</label>
                                <input type="radio" name="rating" value="2" id="rating2">
                                <label for="rating2">2</label>
                                <input type="radio" name="rating" value="3" id="rating3">
                                <label for="rating3">3</label>
                                <input type="radio" name="rating" value="4" id="rating4">
                                <label for="rating4">4</label>
                                <input type="radio" name="rating" value="5" id="rating5">
                                <label for="rating5">5</label>
                                <input type="radio" name="rating" value="6" id="rating6">
                                <label for="rating6">6</label>
                                <input type="radio" name="rating" value="7" id="rating7">
                                <label for="rating7">7</label>
                                <input type="radio" name="rating" value="8" id="rating8">
                                <label for="rating8">8</label>
                                <input type="radio" name="rating" value="9" id="rating9">
                                <label for="rating9">9</label>
                                <input type="radio" name="rating" value="9" id="rating10">
                                <label for="rating10">10</label>
                                <input type="submit" value="Submit Review">
                                <?php
                                if(isset($_GET["error"])){
                                    ?>
                                    <p id=""><?php echo $_GET["error"] ?> </p>
                                    <?php             
                                }
                                ?>
                            </div>
                        </form>
                                <?php
                                $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$gameID");
                                $reviews=$reviews->fetchAll();
                                for($i=0;$i<count($reviews);$i++){
                                    $reviewID=$reviews[$i]["Review_ID"];
                                    $account=$database->query("SELECT a.* FROM accounts AS a INNER JOIN review_owner AS ro ON a.UserID=ro.User_ID AND ro.Review_ID=$reviewID");
                                    $account=$account->fetchObject();
                                    $likes=$database->query("SELECT SUM(Review_ID=$reviewID) AS reviewCount FROM likes");
                                    $likes=$likes->fetchObject();
                                ?>
                        <div id="view-review-container">
                            <h1><a href="viewprofilepage.php?pageid=<?php echo $gameID?>&user=<?php echo $account->Username?>"><?php echo $account->Username?></a></h1> 
                            <p> Game Name:<?php echo $game->Name ?> </p>
                            <p> Description: <?php echo $reviews[$i]["reviews"] ?></p> 
                            <p> Ratings: <?php echo $reviews[$i]["ratings"] ?> </p>
                            <p> Likes:<?php echo $likes->reviewCount?></p>
                            <form action="LikereviewScript.php" method="POST">
                                <input type="hidden" name="reviewID" value="<?php echo $reviewID?>">
                                <input type="hidden" name="pageID" value="<?php echo $gameID?>">
                                <button type="submit"> Like </button>
                            </form>
                        </div>
                    </div>          
                </div>
                <?php 
                                }   
            }else{
                ?>
                <p> Game not found </p>
                <?php
            }
            ?>
            </div>
        </div>
        <div id="backgroundImage"> </div>
    </body>
</html>