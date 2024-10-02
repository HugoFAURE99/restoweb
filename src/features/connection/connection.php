<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../app.css">
    <link rel="stylesheet" href="connection.css">
    <title>Resto Web</title>
</head>
<body>
    <?php
    include "../../components/navBar/navBar.php";
    ?>


    <div class="page">
        <div class="connect_container">
            <h1>Connexion</h1>
            <form action="../../index.php" method="post">
                <input type="text" name="login" placeholder="Login">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Connexion">
            </form>
        </div>
    </div>
    
</body>
</html>