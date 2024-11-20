<?php

include "../src/functions/connect_db.php";
include "../classes/class_autoloader.php";

session_start();

// if (!isset($_SESSION['login'])) {
//     header("Location: ../connection/connection.php");
//     exit;
// }

//Connection à la BDD
$pdo = connect_db();

// Récupérer les commandes  avec etat "en attente" en BDD
$sql = "SELECT * FROM Commande WHERE etatCom = 0";
try {
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $commandes = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo "Erreur lors de la récupération des commandes en attente : " . $error->getMessage();
}

//Transformer les commandes en objets Commande et récupérer les lignes de chaque commande
$JSON_tableau;

foreach ($commandes as $commande) {
    $sqlLignes = "SELECT * FROM ligneCommandes WHERE idCom = '$commande[idCom]'";
    try {
        $sth = $pdo->prepare($sqlLignes);
        $sth->execute();
        $lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $error) {
        echo "Erreur lors de la récupération des lignes de la commande : " . $error->getMessage();
    }
    $commandeObj = new Commande($commande['idCom'], $commande['etatCom'], $commande['totalComTTC'], $commande['typeCom'], $commande['dateCom'], $commande['heureCom'], $commande['idUtil'], $lignes);
    $JSON_tableau[] = $commandeObj;
}

//Convertir le tableau stockant toutes les commandes en JSON
$json = json_encode($JSON_tableau);
header("Content-type: application/json; charset=utf-8");

//Retourner le JSON
echo $json;



?>