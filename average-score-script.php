<?php

function getAverage($id){
    include "database.php";
    $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id");
    $reviews=$reviews->fetchAll();
    if(count($reviews)<=0){
        return "No Ratings Yet";
    }
    $total=0;
    for($i=0; $i<count($reviews);$i++){
        $total+=$reviews[$i]["ratings"];
    }

    $average=$total/count($reviews);
    return round($average,1)."/10";
}

function getAverageValue($id){
    include "database.php";
    $reviews=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id");
    $reviews=$reviews->fetchAll();
    if(count($reviews)<=0){
        return 0;
    }
    $total=0;
    for($i=0; $i<count($reviews);$i++){
        $total+=$reviews[$i]["ratings"];
    }

    $average=$total/count($reviews);
    return round($average,1);
}