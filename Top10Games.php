<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/top10games.css">


<?php
// This will include the database and average score script in the page 
include "database.php";
include "average-score-script.php";

// Getting all the games from database
$games=$database->query("SELECT * FROM games");
$games=$games->fetchAll();
$gameRatings=array();

// Going through all the games and getting the average score which is added to a list.
for($i=0;$i<count($games);$i++){
    $gameID=$games[$i]["game_ID"];
    $gameAverage=getAverageValue($gameID);
    $gameRatings[$gameID]=$gameAverage;
}
// Sorts the list of average scores in decending order
asort($gameRatings);
$sortedGames=$gameRatings;
$top10games=array();
$gameIDList=array_keys($sortedGames);

//Getting data for each game, with the list of average scores and adding it to the top 10 games list.
for($i=count($gameIDList)-1;$i>-1;$i--){
    $gameID=$gameIDList[$i];
    $gameData=$database->query("SELECT * FROM games WHERE game_ID=$gameID");
    $gameData=$gameData->fetchObject();
    $game= new StdClass();
    $game->name=$gameData->Name;
    $game->image=$gameData->Cover_Image;
    $game->id=$gameData->game_ID;


    array_push($top10games,$game);
}
?>

<div id="main3">
    <h1 id="top-game-title"> Top 10 Games </h1>
        <!--Will display The Top 10 rated games, printing out different data for each game.  -->
        <div id= "block3-container">
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[0]->id?>'" ><h1>1.<?php echo $top10games[0]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[0]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[1]->id?>'" ><h1>2.<?php echo $top10games[1]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[1]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[2]->id?>'" ><h1>3.<?php echo $top10games[2]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[2]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[3]->id?>'" ><h1>4.<?php echo $top10games[3]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[3]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[4]->id?>'" ><h1>5.<?php echo $top10games[4]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[4]->image?>"></div>   
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[5]->id?>'" ><h1>6.<?php echo $top10games[5]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[5]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[6]->id?>'"><h1>7.<?php echo $top10games[6]->name?></h1><img src =  "resources/GameImages/<?php echo $top10games[6]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[7]->id?>'" ><h1>8.<?php echo $top10games[7]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[7]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[8]->id?>'" ><h1>9.<?php echo $top10games[8]->name?></h1><img src = "resources/GameImages/<?php echo $top10games[8]->image?>"></div>
            <div class="block3" onclick = "location.href='ViewGamepage.php?id=<?php echo $top10games[9]->id?>'" ><h1>10.<?php echo $top10games[9]->name?></h1><img src ="resources/GameImages/<?php echo $top10games[9]->image?>"></div>           
        </div>   
    </div>
</div>
<div id="backgroundImage"> </div>