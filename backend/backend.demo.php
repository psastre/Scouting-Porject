<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "scouting_project";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);
$conn->set_charset("utf8");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM players";
$r = mysqli_query($conn, $query);
