<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="colonne5.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        require_once 'navbar.html';
        require_once"pdoConnexion.php";
        echo"<br />";
        try {
           
            $requet = "SELECT * FROM `nounou`,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
            $resultats = $dbh->query($requet);
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage() . "<br/>");
        }
        ?>
        <div class="container marketing">  
            </br>
            </br>
            <h1>
                Vous êtes administrateur, vous avez 5 options：
            </h1>
            <?php echo "<br/><br/>";?>
            <div class="row">
                <div class="col-lg-2dot4">
                    <img class="rounded-circle" src="image/valider.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Valider des nounous</h2>
                    <p><a class="btn btn-secondary" href="validerNounou.php" role="button">Aller &raquo;</a></p>
                </div>
                <div class="col-lg-2dot4">
                    <img class="rounded-circle" src="image/bloquer.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Bloquer des nounous</h2>
                    <p><a class="btn btn-secondary" href="bloquerNounou.php" role="button">Aller &raquo;</a></p>
                </div>
                <div class="col-lg-2dot4">
                    <img class="rounded-circle" src="image/debloquer.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Débloquer des nounous</h2>
                    <p><a class="btn btn-secondary" href="librerNounou.php" role="button">Aller &raquo;</a></p>
                </div>
                <div class="col-lg-2dot4">
                    <img class="rounded-circle" src="image/chiffre.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Chiffre d’affaire </h2>
                    <p><a class="btn btn-secondary" href="chiffre_chart.php" role="button">Aller &raquo;</a></p>
                </div>
                <div class="col-lg-2dot4">
                    <img class="rounded-circle" src="image/infonounou.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Afficher info de nounou</h2>
                    <p><a class="btn btn-secondary" href="nounouInfo.php" role="button">Aller &raquo;</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
