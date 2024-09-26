<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="payer.css">
    <title>Resto Web</title>
</head>
<body>
    <?php
    include "../../components/navBar.php";
    ?>


    <div class="page">
        <div class="connect_container">
            <h1>Paiement de votre commande</h1>
            <form action="../confirmation/confirmation.php" method="post">
                <input type="text" name="cb_number" placeholder="N° de CB">
                <input type="text" name="exp_date" placeholder="Date expiration">
                <input type="text" name="ccv" placeholder="CCV">
                <input type="submit" value="Payer">
            </form>
        </div>
    </div>
    
</body>
</html>