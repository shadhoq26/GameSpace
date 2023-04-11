<?php include_once "header.php"?>
<link rel= "Stylesheet" type= "text/css" href="css/searchresults.css">

<?php 
include "database.php";
include "average-score-script.php";
if(!isset($_GET["search"])){
    header("location:index.php");
    exit();
}
$searchText= $_GET["search"];
$searchSQL ="SELECT * FROM games WHERE Name LIKE '%$searchText%' OR 
    Genre LIKE '%$searchText%' OR
    Platform LIKE '%$searchText%' OR
    Publisher LIKE '%$searchText%' "; 
 
$searchResults = $database->query($searchSQL);
$searchResults = $searchResults->fetchAll();


?>
<div id="box-container2">
    <?php
    if(count($searchResults)>0 && !empty($searchText)){
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
                <p>Publisher: <?php echo $searchResults[$i]["Publisher"] ?></p>
                <p>Platform: <?php echo $searchResults[$i]["Platform"] ?></p>
                <p>Price: <?php echo $searchResults[$i]["Price"] ?></p>
            </div>
            <span class="divider"></span>
            <div id="search-rating-box">   
                <h1><?php echo $average;?></h1>
            </div> 
        </div>
        <?php
        }
    }else{
        ?>
        <p id="searchresultstext"> No search results found, please try again.</p>
        <?php
    }
    ?> 
</div>
</div>
<!-- <div id="search-background"> </div> -->





