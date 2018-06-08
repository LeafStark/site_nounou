<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'max_id.php';
        require_once 'calcul.php';
        require_once 'pdoConnexion.php';
        require_once 'navbar.html';
        session_start();
        $emailP = $_SESSION['email'];
        $emailN = $_POST['Email'];
        $id = table_max_id($dbh, 'commande', 'ID_C');
        $salaire = $_POST['money'];
        $duree = $_POST['heure'];

        try {
            $requete = "INSERT INTO `commande`(`ID_C`, `Email_N`, `Email_P`, `Duree`, `Salaire`,`Status`) VALUES ('$id','$emailN','$emailP','$duree','$salaire',0)";
            $resultat = $dbh->exec($requete);
           // var_dump($resultat);
            ?>
        </br>
        <p><strong>Votre conmmande a été confirmé!</strong></p>
        <p>Après la commande a été fait, n'oubliez pas d'évaluation le nounou!</p>
        <?php
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
        <a href="parent.php">Retour</a>
    </body>
</html>
