<?php
//Sets all the variables for the database.
$user = "root";
$password = "";
$databseName = "game_space_website";
$host = "localhost";
//Connects to the database.
$database = new PDO("mysql:dbname=$databseName;host=$host", $user, $password);


