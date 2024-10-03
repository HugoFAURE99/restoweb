<?php
include "../../functions/connexion_bd";
include "../../functions/add_user_bd";


$submit = isset($_POST['submit']);

if ($submit){
    db_add_user();
}



?>

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
            <form action="" method="post">
                <input type="text" name="login" placeholder="loginUtil", required="required">
                <input type="text" name="mail" placeholder="mailUtil" ,required="required">
                <input type="password" name="password" placeholder="pwd", required="required">
		        <input type="password" name="password" placeholder="pwd_check", required="required">
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </div>
</body>
</html>