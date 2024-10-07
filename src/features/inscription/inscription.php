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
    add_user_db();
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
                <input type="text" name="loginUtil" placeholder="loginUtil", required="required">
                <input type="text" name="mail" placeholder="mail" ,required="required">
                <input type="password" name="pwd" placeholder="pwd", required="required">
		        <input type="password" name="pwd_check" placeholder="pwd_check", required="required">
                <input type="submit" name="submit" value="S'inscrire">
            </form>
        </div>
    </div>
</body>
</html>