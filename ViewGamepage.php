<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/viewgamepage.css">

<html>
    <body>
        <div id="main">
            <?php
            include "database.php";
            // Checking to see if the gameID is set in the url.

            if(isset($_GET["id"])){
                $gameID=$_GET["id"];
                // Ask the database to get the game data.
                $results=$database->query("SELECT * FROM games WHERE game_ID=$gameID");
                if($results->rowCount()==1){
                    $game=$results->fetchObject();
                }
                // Gets average score and breakdown of the game
                include "average-score-script.php";
                $average= getAverage($gameID);
                $breakdown= getAverageBreakdown($gameID);
                
                
                ?> 
                <div class="box-container">
                    <div id="first-container">
                        <div>
                            <img src="resources/GameImages/<?php echo $game-> Cover_Image?>"/>
                        </div>
                        <div id="first-text-container">
                            <h1> <?php echo $game-> Name;?> </h1>
                            <p><span>Price:</span> <?php echo $game-> Price;?></p>
                            <p><span>Genre:</span> <?php echo $game-> Genre;?> </p>
                            <p><span>Platform:</span> <?php echo $game-> Platform;?></p>
                            <p><span>Age Rating:</span> <?php echo $game-> Age_Rating;?></p>
                            <p> <?php echo $game-> Information;?></p>
                        </div>
                        <a href="<?php echo $game-> Purchase_Link;?>"> Buy Now </a>  
                    </div>
                    <div id="second-container">
                        <h1> Rating: <?php echo $average;?></h1>
                        <div class="rating-breakdown-bar">
                            <table>
                                <tr>
                                    <th style="width:10%"> Ratings</th>
                                    <th style="width:80%"></th>
                                </tr> 

                                <tr>
                                    <td>10 (<?php echo $breakdown[9] ?>)</td>
                                    <!-- How many people gave it a rating of 10/total amount of votes, to get a percentage of how many people voted it a rating of 10 and display this in a bar form by giving the css that percentage. -->
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[9]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>
                                <tr>
                                    <td>&nbsp; 9 (<?php echo $breakdown[8] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[8]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 8 (<?php echo $breakdown[7] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[7]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 7 (<?php echo $breakdown[6] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[6]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 6 (<?php echo $breakdown[5] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[5]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 5 (<?php echo $breakdown[4] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[4]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>
                                
                                <tr>
                                    <td>&nbsp; 4 (<?php echo $breakdown[3] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[3]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 3 (<?php echo $breakdown[2] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[2]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 2 (<?php echo $breakdown[1] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[1]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>

                                <tr>
                                    <td>&nbsp; 1 (<?php echo $breakdown[0] ?>)</td>
                                    <td><span class="rating-bar" style="width:<?php echo round(($breakdown[0]/$breakdown[10])*100,2)?>%"> &nbsp; </span></td>
                                </tr>
                            </table>
                        </div>
                    </div> 
                    <div class="bottom-container">
                        <div id="contain-all-review">           
                            <form id="reviewbox" action="makereview.php" method="post">
                                <h1> Write your review </h1>
                                <input type="text" name="description" placeholder="Write review here">
                                <!-- setting the form data id -->
                                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                <h3> Choose a rating </h3>
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
                                    <input type="radio" name="rating" value="10" id="rating10">
                                    <label for="rating10">10</label>
                                    <?php
                                    // error message will only show, if you press submit for a review and script finds an error and only display then.
                                    if(isset($_GET["error"])){
                                    ?>
                                    <p id=""><?php echo $_GET["error"] ?> </p>
                                    <?php             
                                    }
                                    ?>
                                </div>
                                <div class="submit_container">
                                    <input type="submit" value="Submit Review">
                                </div>
                            </form>
                            
                            <div id="sort-text">
                                <h1>All Reviews</h1>
                                
                                <?php
                                if(isset($_GET["sort"])){
                                    $sort=$_GET["sort"];
                                    if($sort=="new"){
                                    ?>
                                    <button class="normalbutton" onclick="location.href='ViewGamepage.php?sort=old&id=<?=$gameID?>'"> Oldest Reviews </button>
                                    <button class="buttonhighlight" onclick="location.href='ViewGamepage.php?sort=new&id=<?=$gameID?>'"> Newest Reviews </button>
                                    <?php
                                    }else if($sort=="old"){
                                    ?>
                                    <button class="buttonhighlight" onclick="location.href='ViewGamepage.php?sort=old&id=<?=$gameID?>'"> Oldest Reviews </button>
                                    <button class="normalbutton" onclick="location.href='ViewGamepage.php?sort=new&id=<?=$gameID?>'"> Newest Reviews </button>
                                    <?php
                                    }
                                }else{
                                    ?>
                                    <button class="buttonhighlight" onclick="location.href='ViewGamepage.php?sort=old&id=<?=$gameID?>'"> Oldest Reviews </button>
                                    <button class="normalbutton" onclick="location.href='ViewGamepage.php?sort=new&id=<?=$gameID?>'"> Newest Reviews </button>
                                    <?php
                                }
                                ?>
                                <button class="normalbutton"> Most Liked </button>
                                <button class="normalbutton"> Least Liked </button>
                            </div>
                                <?php
                                $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$gameID");
                                $reviews=$reviews->fetchAll();
                                if(isset($_GET["sort"])){
                                    $sort=$_GET["sort"];
                                    if($sort=="new"){
                                        for($i=count($reviews)-1;$i>-1;$i--){
                                            $reviewID=$reviews[$i]["Review_ID"];
                                            // getting the account that is associated with the review.
                                            $account=$database->query("SELECT a.* FROM accounts AS a INNER JOIN review_owner AS ro ON a.UserID=ro.User_ID AND ro.Review_ID=$reviewID");
                                            $account=$account->fetchObject();

                                            //getting how many likes a review has.
                                            $likes=$database->query("SELECT SUM(Review_ID=$reviewID) AS reviewCount FROM likes");
                                            $likes=$likes->fetchObject();
                                            
                                            // if statement checks if the review is yours or anther users as if it is your account, it will link to your profile page,
                                            // if it is another users, it will link to their profile page.
                                            if(isset($_SESSION["user"]) && $account->UserID==$_SESSION["user"]->UserID){
                                                $profileLink="profilepage.php";
                                            }else{
                                                $profileLink="viewprofilepage.php?pageid=".$gameID."&user=".$account->Username;
                                            }
                                            ?>
                                            <div id="view-review-container">
                                                <div id="view-review-box">
                                                    <h1><a href="<?php echo $profileLink?>"><?php echo $account->Username?></a></h1> 
                                                    <p><span>Game Name:</span><?php echo $game->Name ?> </p>
                                                    <p><span>Description:</span> <?php echo $reviews[$i]["reviews"] ?></p> 
                                                    <p><span>Ratings:</span> <?php echo $reviews[$i]["ratings"] ?> </p>
                                                    <p><span>Likes:</span><?php echo $likes->reviewCount?></p>
                                                    <form action="LikereviewScript.php" method="POST">
                                                        <input type="hidden" name="reviewID" value="<?php echo $reviewID?>">
                                                        <input type="hidden" name="pageID" value="<?php echo $gameID?>">
                                                        <button type="submit"> Like </button>
                                                    </form>
                                                </div>
                                            </div>          
                                        <?php 
                                        }
                                    }else if($sort=="old"){
                                        for($i=0;$i<count($reviews);$i++){
                                            $reviewID=$reviews[$i]["Review_ID"];
                                            $account=$database->query("SELECT a.* FROM accounts AS a INNER JOIN review_owner AS ro ON a.UserID=ro.User_ID AND ro.Review_ID=$reviewID");
                                            $account=$account->fetchObject();
                                            $likes=$database->query("SELECT SUM(Review_ID=$reviewID) AS reviewCount FROM likes");
                                            $likes=$likes->fetchObject();
                                            
                                            if(isset($_SESSION["user"]) && $account->UserID==$_SESSION["user"]->UserID){
                                                $profileLink="profilepage.php";
                                            }else{
                                                $profileLink="viewprofilepage.php?pageid=".$gameID."&user=".$account->Username;
                                            }
                                            ?>
                                            <div id="view-review-container">
                                                <div id="view-review-box">
                                                    <h1><a href="<?php echo $profileLink?>"><?php echo $account->Username?></a></h1> 
                                                    <p><span> Game Name:</span><?php echo $game->Name ?> </p>
                                                    <p><span> Description:</span> <?php echo $reviews[$i]["reviews"] ?></p> 
                                                    <p><span> Ratings:</span> <?php echo $reviews[$i]["ratings"] ?> </p>
                                                    <p><span> Likes:</span><?php echo $likes->reviewCount?></p>
                                                    <form action="LikereviewScript.php" method="POST">
                                                        <input type="hidden" name="reviewID" value="<?php echo $reviewID?>">
                                                        <input type="hidden" name="pageID" value="<?php echo $gameID?>">
                                                        <button type="submit"> Like </button>
                                                    </form>
                                                </div>
                                            </div>          
                                        <?php 
                                        }
                                    }
                                }else{
                                    for($i=0;$i<count($reviews);$i++){
                                        $reviewID=$reviews[$i]["Review_ID"];
                                        $account=$database->query("SELECT a.* FROM accounts AS a INNER JOIN review_owner AS ro ON a.UserID=ro.User_ID AND ro.Review_ID=$reviewID");
                                        $account=$account->fetchObject();
                                        $likes=$database->query("SELECT SUM(Review_ID=$reviewID) AS reviewCount FROM likes");
                                        $likes=$likes->fetchObject();
                                        
                                        if(isset($_SESSION["user"]) && $account->UserID==$_SESSION["user"]->UserID){
                                            $profileLink="profilepage.php";
                                        }else{
                                            $profileLink="viewprofilepage.php?pageid=".$gameID."&user=".$account->Username;
                                        }
                                        ?>
                                        <div id="view-review-container">
                                            <div id="view-review-box">
                                                <h1><a href="<?php echo $profileLink?>"><?php echo $account->Username?></a></h1> 
                                                <p><span> Game Name:</span><?php echo $game->Name ?> </p>
                                                <p><span> Description:</span> <?php echo $reviews[$i]["reviews"] ?></p> 
                                                <p><span> Ratings:</span> <?php echo $reviews[$i]["ratings"] ?> </p>
                                                <p><span> Likes:</span><?php echo $likes->reviewCount?></p>
                                                <form action="LikereviewScript.php" method="POST">
                                                    <input type="hidden" name="reviewID" value="<?php echo $reviewID?>">
                                                    <input type="hidden" name="pageID" value="<?php echo $gameID?>">
                                                    <button type="submit"> Like </button>
                                                </form>
                                            </div>
                                        </div>          
                                    <?php 
                                    }
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
                        </div>
                    </div>
                </div>
            </div>       
        </div>            
    </body>
</html>