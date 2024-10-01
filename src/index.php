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
        //Display 4 more ordered products
        echo "<h2>Produits les plus commandés</h2>";
            echo "<div class='product_list_container'>";
            //Display a line of 4 products
            for ($i = 0; $i < 4; $i++) {
                echo "<a href='features/produit/produit.php?id=$i' class='product_card_link'>";
                echo "<div class='product_card'>
                        <h2>Produit $i</h2>
                    </div>"; 
                echo "</a>";
            }
            echo "</div>";
        ?>

        <hr>

        <?php
        //Display of all products
            //Display of j lines of 4 products
            echo "<h2>Tous les produits</h2>";
            for ($j = 0; $j < 3; $j++) {

                echo "<div class='product_list_container'>";
                //Display a line of 4 products
                for ($i = 0; $i < 4; $i++) {
                    echo "<a href='features/produit/produit.php?id=$i' class='product_card_link'>";
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