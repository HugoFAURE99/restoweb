
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="panier.css">
    <link rel="stylesheet" href="../../app.css">
    <title>Resto Web</title>
</head>
<body>
<?php
    include "../../components/navBar.php";
    ?>
    <div class="page">
        <div class="cart_container">
            <h1>Résumé de la commande</h1>
            <div class='product_list_container'>
                <?php
                    // Affichage d'une ligne de produits
                    for ($i = 0; $i < 25; $i++) {
                        echo "<div class='product_line'>";
                        echo "<div class='product_card'>
                                <h2>Produit $i</h2>
                            </div>";
                        echo "<button class='delete_product'>X</button>";
                        echo "</div>";

                    }
                ?>
            </div>
        </div>
        <div class="cart_container">
            <h1>Total</h1>
            <div class='product_list_container'>
                <?php
                    // Affichage d'une ligne de produits
                   echo "<table>
                        <tr>
                            <th>Produit(s)</th>
                            <th>Quantité(s)</th>
                            <th>Prix</th>
                            <th>Total</th>
                        </tr>";
                    for ($i = 0; $i < 25; $i++) {
                        echo "<tr>
                                <td>Produit $i</td>
                                <td>0</td>
                                <td>0$</td>
                                <td>0$</td>
                            </tr>";

                    }
                    echo "</table>";
                ?>
            </div>
            <hr>
            <div class='cart_total_container'>
                <?php
                $total = 0;
                    echo " <h3> Total TTC: " . $total . " $</h3>";
                ?>
            </div>
            <a href="../payer/payer.php">Confirmer</a>     
        </div>

    </div>
</body>
</html>