
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panierC.css">
    <link rel="stylesheet" href="src/componants/navBar.css">
    <title>Resto Web</title>
</head>
<body>
<?php
    include "components/navBar.php";
    ?>
    <div class="page">
        <h1>Résumé de la commande</h1>
        <?php
        //listes des produits commandés
            echo "<div class='product_list_container'>";
            // Affichage d'une ligne de produits
            for ($i = 0; $i < 4; $i++) {
                echo "<div class='product_card'>
                        <h2>Produit $i</h2>
                    </div><br/>
                    <p> suprimer le produit </p>"; 
            }
            echo "</div>";
        ?>
    <div class='product_list_container'>
        <h2>Confirmer</h2>
    </div>
</body>
</html>