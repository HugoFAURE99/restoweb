<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="inscription.css">
    <title>Resto Web</title>
</head>
<body>
    
    <?php
    include "../../components/navBar/navBar.php";
    ?>
    <div class="page">
        <div class="inscription_container">
            <h1>Inscription</h1>
            <form action="../connection/connection.php" method="post">
                <input type="text" name="login" placeholder="Login">
                <input type="text" name="mail" placeholder="Mail">
                <input type="password" name="password" placeholder="Password">
		        <input type="password" name="password" placeholder="Password">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </div>
</body>
</html>