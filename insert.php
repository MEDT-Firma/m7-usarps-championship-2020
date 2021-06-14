<?php
require_once __DIR__ . "/bootstrap.php";

    $player1name = $_GET["player1name"];
    $player1symbol = $_GET["player1"];
    $player2name = $_GET["player2name"];
    $player2symbol = $_GET["player2"];
    $datetime = empty($_GET["datetime"]) ? "none" : $_GET["datetime"];

    if (false) {
        echo "$player1name<br>";
        echo "$player1symbol<br>";
        echo "$player2name<br>";
        echo "$player2symbol<br>";
        echo "$datetime<br>";
    }

    $round = new RpsRound($player1name, $player1symbol, $player2name, $player2symbol, $datetime);
    $entityManager->persist($round);
    $entityManager->flush();

    header("Location: ./index.php");