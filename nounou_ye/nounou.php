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
        echo("的页面<br/>");
        ?>
        <p><a href="disponibilitesNounou.html">Disponibilités</a></p>
        <p><a href="nounoucherche.php">Informations</a></p>
         <p><a href="planning.php">Planning</a></p>
    </body>
</html>
