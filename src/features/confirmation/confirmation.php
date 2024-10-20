<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="confirmation.css">
    <title>Resto Web</title>
</head>
<body>
    <?php
    session_start(); // Démarrer la session PHP pour maintenir l'état de l'utilisateur

    // Inclusion des éléments de la barre de navigation et du fichier de connexion à la base de données
    include "../../components/navBar/navBar.php";
    include "../../functions/connect_db.php";

    // Connexion à la base de données
    $dbh = connect_db(); // Connexion via PDO

    // Récupération de l'ID de la commande, par exemple via un paramètre GET ou POST (ici statiquement défini pour l'exemple)
    $id_commande = 3;

    // Vérifier que l'ID de commande est bien défini et supérieur à 0
    if ($id_commande > 0) {
        // Préparation de la requête pour récupérer les informations de la commande
        $sql = "SELECT idCom, totalComTTC FROM Commande WHERE idCom = :id_commande";
        $stmt = $dbh->prepare($sql); 
        $stmt->bindParam(':id_commande', $id_commande, PDO::PARAM_INT);

        // Exécution de la requête et récupération des résultats
        if ($stmt->execute()) {
            $commande = $stmt->fetch(PDO::FETCH_ASSOC);

            // Si des données sont retournées, on les stocke, sinon on indique qu'elles sont inconnues
            if ($commande) {
                $numero_commande = $commande['idCom'];
                $montant_commande = $commande['totalComTTC'];
            } else {
                $numero_commande = "inconnu";
                $montant_commande = "inconnu";
            }
        } else {
            die("Problème lors de la récupération des informations de la commande.");
        }
    } else {
        $numero_commande = "inconnu";
        $montant_commande = "inconnu";
    }
    ?>

    <!-- Contenu de la page de confirmation de commande -->
    <div class="page">
        <div class='confirmation_container'>
            <h2>Commande confirmée !</h2>
            <?php if ($numero_commande !== "inconnu") : ?>
                <p>Votre commande n°<?php echo htmlspecialchars($numero_commande); ?> d'un montant de <?php echo htmlspecialchars($montant_commande); ?> € a bien été validée.</p>
            <?php else : ?>
                <p>Impossible de retrouver cette commande.</p>
            <?php endif; ?>
            <a href="../../index.php">Retour à l'accueil</a>
        </div>
    </div>

</body>
</html>
