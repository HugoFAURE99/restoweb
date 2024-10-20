<?php
function insert_commande($totalComTTC,$typeCom,$idUtil){
    $dbh=connect_db();
    $sql="INSERT INTO commande (etatCom, totalComTTC, typeCom, dateCom, heureCom, idUtil) VALUES (:etatCom, :totalComTTC, :typeCom, :dateCom, :heureCom, :idUtil)";
    try{
        $sth=$dbh->prepare($sql);
        $sth->execute(array(':etatCom'=>'En cours',':totalComTTC'=>$totalComTTC,':typeCom'=>$typeCom,':dateCom'=>date('Y-m-d'),':heureCom'=>date('H:i:s'),':idUtil'=>$idUtil));
    }catch(PDOException $e){
        die("Erreur dans la fonction insertCommande : ".$e->getMessage());   
    }
    echo "Commande ajoutée avec succès";
    return $dbh->lastInsertId();
}





?>