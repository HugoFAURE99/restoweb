<?php
session_start();

include "../../functions/connect_db.php";
include "../../functions/get_products.php";

//--------------------------------definition des vaziables-------------------------------------
$typeCom = isset($_POST['typeCom']) ? $_POST['typeCom'] : null; 

if (!isset($_SESSION['login'])) {
    header("Location: ../connection/connection.php");
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array(); //initialise le tableau
}


$typeCom = isset($_POST['typeCom']) ? $_POST['typeCom'] : null;
$prixproHT = isset($_POST['prixproHT']) ? $_POST['prixproHT'] : 0;

$products = get_products(); //Prend tous les produits


$id = $_SESSION['array']['id'];

//-----------------------------------------------------------------------------------------------

print_r($_SESSION['cart']);


/*
// Code pour appliquer la tva sur le prix
if ($_SESSION['typeCom']=='Sur place'){
    $tva=$prixproHT*(5.5);
}else{
    $tva=$prixproHT*(10);
}
    */

?>

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
    include "../../components/navBar/navBar.php";
?>
    <div class="page">
        <div class="cart_container">
            <h1>Résumé de la commande</h1>
            <div class='product_list_container'>
                <?php
                    // Affichage d'une ligne de produits
                    foreach ($products as $product) { 
                        if ($product['idProduit'] == $_SESSION['array']['id']) {
                            echo "<div class='product_line'>";
                            echo "<div class='product_card'>
                                    <h2>" . $product['libproduit'] . "</h2>
                                    <p>Quantité: </p>
                                    <input type='number' min='0' max='100' value='" . $product['quantite'] . "'> 
                                </div>";
                            echo "<button class='delete_product'>X</button>";
                            echo "</div>";
                        }
                    }
                ?>
            </div>
            <a >Valider les changements</a>
             

        </div>
        <div class="cart_container">
            <h1>Total</h1>
            <div class='product_list_container'>
                <?php
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
                <div class='check_box_container'>
                    <input type="checkbox" name="check" value="true">
                    <label for="check">à emporter ?</label>
                </div>
                
            </div>
            <a href="../payer/payer.php">Confirmer</a> 
        </div>

    </div>
</body>
</html>