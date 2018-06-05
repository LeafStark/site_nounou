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
        <link href="carousel.css" rel="stylesheet">
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
            $requet_nbc = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
            $requet_nbi = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=2;";
            $nb1 = $dbh->query($requet_nbc);
            $nb2 = $dbh->query($requet_nbi);
            $nb_c = $nb1->fetch();
            $nb_i = $nb2->fetch();
            echo"<div class='ml-2'>";
            echo " Le nombre de nounous en attene de validation: " . $nb_c[0] . "<br />";
            echo " Le nombre de nounous validées: " . $nb_i[0] . "<br /><br/>";
echo "</div>";
            $requet = "SELECT * FROM `nounou`,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
            $resultats = $dbh->query($requet);
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage() . "<br/>");
        }
        ?>
        <div class="container marketing">     
            <h1>
                Vous êtes administrateur, vous avez 4 options：
            </h1>
            <div class="row">
                <div class="col-lg-3">
                    <img class="rounded-circle" src="image/valider.svg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Valider des nounous</h2>
                    <p><a class="btn btn-secondary" href="validerNounou.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="rounded-circle" src="image/bloquer.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Bloquer des nounous</h2>
                    <p><a class="btn btn-secondary" href="bloquerNounou.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="rounded-circle" src="image/debloquer.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Débloquer des nounous</h2>
                    <p><a class="btn btn-secondary" href="librerNounou.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="rounded-circle" src="image/chiffre.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Chiffre d’affaire du site</h2>
                    <p><a class="btn btn-secondary" href="chiffre_chart.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </body>
</html>
