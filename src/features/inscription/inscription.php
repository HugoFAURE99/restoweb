<?php
include "../../functions/connection_db.php";
include "../../functions/add_user_db.php";


$submit = isset($_POST['submit']);

if ($submit){
    $loginUtil = $_POST['loginUtil'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_check = $_POST['pwd_check'];

    // Vérifie que les mots de passe correspondent avant d'ajouter l'utilisateur
    if ($pwd === $pwd_check) {
        add_user_db();
        echo "Inscription réussie !";
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }


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
                <input type="text" name="mail" placeholder="mail" ,required="required">
                <input type="password" name="password" placeholder="pwd", required="required">
		        <input type="password" name="password_check" placeholder="pwd_check", required="required">
                <input type="submit" name="submit" value="S'inscrire">
            </form>
        </div>
    </div>
</body>
</html>