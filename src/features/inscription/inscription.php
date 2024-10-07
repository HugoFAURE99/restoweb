<?php
include "../../functions/connection_db.php";
include "../../functions/add_user_db.php";


$submit = isset($_POST['submit']);

if ($submit){
    //Rajouter des isset avec les erreurs liées
    $loginUtil = $_POST['loginUtil'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_check = $_POST['pwd_check'];

    //rejouter execute si tous les isset sont ok
    $error_message=add_user_db();
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
            <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
                <input type="text" name="loginUtil" placeholder="Pseudo", required="required">
                <input type="text" name="mail" placeholder="Mail" ,required="required">
                <input type="password" name="pwd" placeholder="Mot de passe", required="required">
		        <input type="password" name="pwd_check" placeholder="Verification du mot de passe", required="required">
                <input type="submit" name="submit" value="S'inscrire">
            </form>

            <?php 
            if ($submit && isset($error_message)){
                foreach ($error_message as $message) {
                    echo "<p class='form_error_message'>$message</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>