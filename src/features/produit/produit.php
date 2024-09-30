<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="produit.css">
    <title>Produit - Resto Web</title>
    <style>
        .product-container {
            display: flex;
            width: 80%;
            margin: 0 auto;
            justify-content: space-between;
            align-items: center;
        }

        .product-image {
            width: 45%;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-details {
            width: 50%;
            text-align: left;
        }

        .product-details h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .product-description {
            margin-bottom: 2rem;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .quantity-selector button {
            font-size: 1.5rem;
            width: 40px;
            height: 40px;
            margin: 0 10px;
            cursor: pointer;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
        }

        .quantity-selector input {
            width: 50px;
            text-align: center;
            font-size: 1.2rem;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-to-cart-btn {
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include "../../components/navBar.php"; ?>

    <div class="product-container">
        <!-- Colonne image -->
        <div class="product-image">
            <img src="https://via.placeholder.com/500x500" alt="Image du produit">
        </div>

        <!-- Colonne détails du produit -->
        <div class="product-details">
            <h1>Nom du produit</h1>
            <p class="product-description">
                Voici une description du produit qui explique ses caractéristiques et ses avantages.
            </p>

            <!-- Sélecteur de quantité -->
            <div class="quantity-selector">
                <button onclick="updateQuantity('subtract')">-</button>
                <input type="text" id="quantity" value="1" readonly>
                <button onclick="updateQuantity('add')">+</button>
            </div>

            <!-- Bouton Ajouter au panier -->
            <form action="../../">
                <button class="add-to-cart-btn">Ajouter au panier</button>
            </form>
        </div>
    </div>

    <script>
        function updateQuantity(action) {
            var quantityInput = document.getElementById("quantity");
            var currentQuantity = parseInt(quantityInput.value);

            if (action === 'add') {
                quantityInput.value = currentQuantity + 1;
            } else if (action === 'subtract' && currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        }
    </script>

</body>
</html>
