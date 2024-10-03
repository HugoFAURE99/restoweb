<?php

include "../../functions/connect_db.php";
include "../../functions/get_product.php";

// No need to connect to db because db_connect already call in each functions that send db request

$id = $_GET['id']; // Get the id of the product in URL
$product = isset($id) ? get_product($id) : null; // Get the product with its id
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="produit.css">
    <title>Resto Web</title>

</head>
<body>

    <?php include "../../components/navbar/navBar.php"; ?>

    <div class="page">
        <div class="product_container">
            <!-- Colonne image -->
            <div class="product_image">
                <img src="../../img/product_placeholder_500x500.png" alt="Image du produit">
            </div>

            <!-- Colonne détails du produit -->
            <div class="product_details">
                <h1><?php echo $product['libProduit']; ?></h1>
                <p>Prix/Unité : <?php echo $product['prixProHT']; ?> $</p>
                

                <!-- Sélecteur de quantité -->
                <form action="../../index.php" class='form_quantity'>
                        <input type="number" id="quantity" value="1" min="1" max="10">
                        <!-- Bouton Ajouter au panier -->
                        <input type="submit" value="Ajouter au panier" class="add_to_cart_btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
