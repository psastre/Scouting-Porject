<?php

    include_once("backend.demo.php");

    $queryAllTable = "SELECT * FROM players";

    $result = $conn->query($queryAllTable);
    while($player = $result->fetch_assoc()){
        $players[] = $player;
    }

    $encoded_data = json_encode($players, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    file_put_contents('data.json', $encoded_data);