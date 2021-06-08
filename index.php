<?php
require_once './vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader, [
    //'cache' => './compilation_cache',
]);

require_once __DIR__ . "/bootstrap.php";
$entityManager = $entityManager ?? null;
$match = $entityManager->getRepository("RpsRound")->findAll();
var_dump($match);


// Liste der Hotels kommt aus PHP 

echo $twig->render(
    'index.twig.html',
    ['matches' => $match]
);