<?php
{
include "../../functions/connect_db.php";

session_start();

$pdo= connect_db();


 $sql = "UPDATE commande set etatCom='terminer' WHERE idCom = :id";


 try {
     $sth = $dbh->prepare($sql);
     $sth->execute(array(':id' => $id));
     $etat = $sth->fetch(PDO::FETCH_ASSOC);
 } catch (PDOException $ex) {
     die("Erreur lors de la requête SQL : " . $ex->getMessage());
 }

echo "commande terminer";



}