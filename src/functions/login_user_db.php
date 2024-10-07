<?php

function login_user_db($login, $password)
{
    // Connexion à la base de données
    $dbh = connection_db();

    // Requête pour vérifier si le login existe dans la base de données
    $sql = "SELECT loginUtil, pwdUtil FROM utilisateur WHERE loginUtil = :loginUtil";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(':loginUtil' => $login));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }

    // Vérifier si un utilisateur a été trouvé
    if ($user) {
        // Comparer le mot de passe saisi avec celui de la base de données (utiliser password_verify pour les mots de passe hachés)
        if (password_verify($password, $user['pwdUtil'])) {
            // Le mot de passe est correct, l'utilisateur peut se connecter
            return true;
        } else {
            // Mot de passe incorrect
            return false;
        }
    } else {
        // L'utilisateur n'existe pas
        return false;
    }
}

?>
