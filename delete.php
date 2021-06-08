<?php
    require_once __DIR__ . "/bootstrap.php";
try {
    $entityManager = $entityManager ?? null;
    if (isset($_GET["matchid"])) {
        $match = $entityManager->find("RpsRound", $_GET["matchid"]);
        $entityManager->remove($match);
        $entityManager->flush();
    }
    header("Location: index.php");
} catch (\Doctrine\ORM\OptimisticLockException $e) {
} catch (\Doctrine\ORM\TransactionRequiredException $e) {
} catch (\Doctrine\ORM\ORMException $e) {
}