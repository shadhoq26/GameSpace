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

function getAverageBreakdown($id){
    include "database.php";
    $rating1=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='1'");
    $rating2=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='2'");
    $rating3=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='3'");
    $rating4=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='4'");
    $rating5=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='5'");
    $rating6=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='6'");
    $rating7=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='7'");
    $rating8=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='8'");
    $rating9=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='9'");
    $rating10=$database->query("SELECT r.* FROM review AS r INNER JOIN game_review AS gr ON r.Review_ID=gr.Review_ID AND gr.game_ID=$id AND r.ratings='10'");
    
    $rating1=$rating1->fetchALL();
    $rating2=$rating2->fetchALL();
    $rating3=$rating3->fetchALL();
    $rating4=$rating4->fetchALL();
    $rating5=$rating5->fetchALL();
    $rating6=$rating6->fetchALL();
    $rating7=$rating7->fetchALL();
    $rating8=$rating8->fetchALL();
    $rating9=$rating9->fetchALL();
    $rating10=$rating10->fetchALL();
    
    $count1=count($rating1);
    $count2=count($rating2);
    $count3=count($rating3);
    $count4=count($rating4);
    $count5=count($rating5);
    $count6=count($rating6);
    $count7=count($rating7);
    $count8=count($rating8);
    $count9=count($rating9);
    $count10=count($rating10);

    $total=$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8+$count9+$count10;

    $breakdown=array($count1,$count2,$count3,$count4,$count5,$count6,$count7,$count8,$count9,$count10,$total);
    return $breakdown;
}