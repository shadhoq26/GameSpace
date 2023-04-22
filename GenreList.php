<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/genrelist.css">

<?php 
include "database.php";
include "average-score-script.php";

// using the games associated with the genre.
$searchText= $_GET["genre"];
$searchSQL ="SELECT * FROM games WHERE Genre LIKE '%$searchText%'"; 
 
$searchResults = $database->query($searchSQL);
$searchResults = $searchResults->fetchAll();


?>
<div id="box-container2">
    <h1 id="page-title"><?php echo $_GET["genre"] ?> games</h1>
    <?php
    
    // loops through all the games and displaying it, getting average score as well.
    for($i=0; $i<count($searchResults);$i++){
        $url= "ViewGamepage.php?id=".$searchResults[$i]["game_ID"];
        $average= getAverage($searchResults[$i]["game_ID"]);
        ?>
        <div id="first-box2" onclick="location.href='<?php echo $url ?>'">
        <div id="search-image-container">
            <img src="resources/GameImages/<?php echo $searchResults[$i]["Cover_Image"] ?>"/>
        </div>
        <div id="information-box">
            <h1 class = "boxText2"><?php echo $searchResults[$i]["Name"] ?></h1> 
            <p><span>Publisher:</span> <?php echo $searchResults[$i]["Publisher"] ?></p>
            <p><span>Platform:<span> <?php echo $searchResults[$i]["Platform"] ?></p>
            <p><span>Price:</span> <?php echo $searchResults[$i]["Price"] ?></p>
        </div>
        <span class="divider"></span>
        <div id="search-rating-box">
            <h1><?php echo $average;?></h1>
        </div>
    </div>
    <?php
    }
    ?> 
</div> 
<!-- <div id="genre-list-backgroundImage"></div> -->