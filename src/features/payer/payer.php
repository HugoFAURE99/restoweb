<?php
include "../../functions/connect_db.php";
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../connection/connection.php");
    exit;
}

$pdo = connect_db(); 
$error_message = null;
$submit = isset($_POST['submit']);

if ($submit) {
    $idCom = $_POST['idCom'];

    try {
        $etatCom = "Calculée";
        $sql = "UPDATE Commande SET etatCom = :etatCom WHERE idCom = :idCom";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':etatCom' => $etatCom,
            ':idCom' => $idCom
        ]);

        echo "L'état de la commande avec id $idCom a été mis à jour avec succès.";
    } catch (PDOException $error) {
        echo "Erreur lors de la mise à jour de la commande : " . $error->getMessage();
    }
}
?>

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
    <?php include "../../components/navBar/navBar.php"; ?>

    <div class="page">
        <div class="payment_container">
            <h1>Paiement de votre commande</h1>
            <form action="../confirmation/confirmation.php" method="post">
   
                <input type="hidden" name="idCom" value="4">
                
                <input type="text" name="cb_number" placeholder="N° de CB" required="required">
                <input type="text" name="exp_date" placeholder="Date expiration" required="required">
                <input type="text" name="ccv" placeholder="CCV" required="required">
                <input type="submit" name ="submit" value="Payer">
            </form>
        </div>
    </div>
</body>
</html>
