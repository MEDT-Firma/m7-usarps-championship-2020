<?php
require_once "bootstrap.php";
require_once __DIR__ . "/src/RpsRound.php";

$round1 = new RpsRound();
$round2 = new RpsRound();
$round3 = new RpsRound();
$round4 = new RpsRound();
$round5 = new RpsRound();

$round1->setPlayerOne('Murat Gürkem');
$round1->setPlayerOneSymbol('rock');
$round1->setPlayerTwo('Jeremy Pascal');
$round1->setPlayerTwoSymbol('scissors');
$round1->setDatetime('2003-08-18 17:17:17');
$entityManager->persist($round1);
$entityManager->flush();

$round2->setPlayerOne('Daniel Huber');
$round2->setPlayerOneSymbol('paper');
$round2->setPlayerTwo('Sabrina Gülle');
$round2->setPlayerTwoSymbol('scissors');
$round2->setDatetime('2003-09-12 08:08:09');
$entityManager->persist($round2);
$entityManager->flush();

$round3->setPlayerOne('Herbert Jock');
$round3->setPlayerOneSymbol('rock');
$round3->setPlayerTwo('Mario Martinez');
$round3->setPlayerTwoSymbol('rock');
$round3->setDatetime('2021-02-21 12:14:12');
$entityManager->persist($round3);
$entityManager->flush();

$round4->setPlayerOne('Kevin Lowe');
$round4->setPlayerOneSymbol('rock');
$round4->setPlayerTwo('Patrick Schnoll');
$round4->setPlayerTwoSymbol('paper');
$round4->setDatetime('2020-03-23 02:56:22');
$entityManager->persist($round4);
$entityManager->flush();

$round5->setPlayerOne('Jasmin Anderson');
$round5->setPlayerOneSymbol('scissors');
$round5->setPlayerTwo('Sarah Engles');
$round5->setPlayerTwoSymbol('scissors');
$round5->setDatetime('2110-01-01 09:34:37');
$entityManager->persist($round5);
$entityManager->flush();