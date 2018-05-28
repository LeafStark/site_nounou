<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'pdoConnexion.php';
        session_start();
        $email = $_SESSION['email'];
        $requet = "SELECT * FROM `nounou` where `Email`='$email';";
        $res = $dbh->query($requet);
        $resultat = $res->fetch();
        echo $resultat["Prenom"] . " " . $resultat['Nom'];
        echo("的页面");
        ?>
        <a href="nounoucherche.php">Informations</a>
    </body>
</html>
