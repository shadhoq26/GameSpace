<?php
//Sets all the variables for the database.
$user = "root";
$password = "";
$databaseName = "game_space_website";
$host = "localhost";
//Connects to the database.
$database = new PDO("mysql:dbname=$databaseName;host=$host", $user, $password);
