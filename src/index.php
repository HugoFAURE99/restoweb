<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="index.css">
    <title>Resto Web</title>
</head>
<body>
    <?php
    include "components/navBar.php";
    ?>
    <div class="page">
        <?php
        //4 produits les plus commandés
            echo "<div class='product_list_container'>";
            // Affichage d'une ligne de 4 produits
            for ($i = 0; $i < 4; $i++) {
                echo "<a href='features/produit/produit.php'>";
                echo "<div class='product_card'>
                        <h2>Produit $i</h2>
                    </div>"; 
                echo "</a>";
            }
            echo "</div>";
        ?>

        <hr>

        <?php
        //Affichage de tous les produits
            //Affichage de j lignes de 4 produits
            for ($j = 0; $j < 3; $j++) {

                echo "<div class='product_list_container'>";

                // Affichage d'une ligne de 4 produits
                for ($i = 0; $i < 4; $i++) {
                    echo "<a href='features/produit/produit.php'>";
                    echo "<div class='product_card'>
                            <h2>Produit $i</h2>
                        </div>"; 
                    echo "</a>";
                }

                echo "</div>";
            }
        ?>

    </div>
    
</body>
</html>