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
    include "../../components/navBar/navBar.php";
    include "../../functions/connect_db.php";
    // Connexion à la BDD
    $dsn = 'mysql:host=localhost;dbname=restoweb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }

    // Récupérer l'ID de la commande via l'URL (GET)
    $id_commande = isset($_GET['id_commande']) ? (int) $_GET['id_commande'] : 0;

    // Vérifier si l'ID de commande est valide
    if ($id_commande > 0) {
        // Requête pour récupérer les détails de la commande
        $sql = "SELECT idCom, totalComTTC FROM Commande WHERE idCom = :id_commande";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_commande', $id_commande, PDO::PARAM_INT);

        // Exécuter la requête
        if ($stmt->execute()) {
            $commande = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérification des résultats
            if ($commande) {
                $numero_commande = $commande['idCom'];
                $montant_commande = $commande['totalComTTC'];
            } else {
                $numero_commande = "inconnu";
                $montant_commande = "inconnu";
            }
        } else {
            // En cas d'erreur d'exécution de la requête
            die("Erreur lors de la récupération des données.");
        }
    } else {
        $numero_commande = "inconnu";
        $montant_commande = "inconnu";
    }
    ?>

    <!-- Contenu de la page de confirmation -->
    <div class="page">
        <div class='confirmation_container'>
            <h2>Commande confirmée!</h2>
            <?php if ($numero_commande !== "inconnu") : ?>
                <p>Votre commande N°<?php echo htmlspecialchars($numero_commande); ?> d'un montant de <?php echo htmlspecialchars($montant_commande); ?> € est confirmée.</p>
            <?php else : ?>
                <p>Commande non trouvée.</p>
            <?php endif; ?>
            <a href="../../index.php">Retour à la page d'accueil</a>
        </div>
    </div>

</body>
</html>
