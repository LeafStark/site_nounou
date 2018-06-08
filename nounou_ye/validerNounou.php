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
    </head>
    <body>

        <?php
        require_once"pdoConnexion.php";
        require_once 'navbar.html';
        require_once 'showphoto.php';
        try {
            /* $requet_nbc = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
              $requet_nbi = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=2;";
              $nb1 = $dbh->query($requet_nbc);
              $nb2 = $dbh->query($requet_nbi);
              $nb_c = $nb1->fetch();
              $nb_i = $nb2->fetch();
              echo "Le nombre de nounous en attene de validation: " . $nb_c[0] . "<br />";
              echo "Le nombre de nounous validées: " . $nb_i[0] . "<br /><br/>";
              echo("Voici la liste des candidatures des nounous en attene de validation" . "<br/>"); */
            $requet = "SELECT * FROM `nounou`,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
            $resultats = $dbh->query($requet);
            $requet_nbc = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=1;";
            $requet_nbi = "SELECT COUNT(`ID_N`) FROM `nounou` ,`compte` WHERE `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=2;";
            $nb1 = $dbh->query($requet_nbc);
            $nb2 = $dbh->query($requet_nbi);
            $nb_c = $nb1->fetch();
            $nb_i = $nb2->fetch();
            echo("</br>");

            echo "<p><strong> Le nombre de nounous en attene de validation: " . $nb_c[0] . "</strong></p>";
            echo "<p><strong> Le nombre de nounous validées: " . $nb_i[0] . "</strong></p>";
            echo("</div></div></br>");
            ?>
            <form method="post" action="valider.php">
                <?php
                echo("Voici la liste des candidatures des nounous en attene de validation" . "<br/>");
                ?>

                <div class="container marketing">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <?php
                            //echo("<div class=\"card flex-md-row mb-4 box-shadow h-md-250\">");
                            while ($row = $resultats->fetch()) {
                                echo "<pre>";
                                echo $row['Prenom'] . " " . $row['Nom'] . "<ul>";
                                echo "<li>Age: " . $row['Age'] . "</li>";
                                echo "<li>Ville: " . $row['Ville'] . "</li>";
                                echo "<li>Email: " . $row['Email'] . "</li>";
                                echo "<li>Portable: " . $row['Portable'] . "</li>";
                                echo"</ul>";
                                echo "Valider" . "<input type='checkbox' name= 'valider[]' value=" . $row['Email'] . ">";
                                echo"Refuser" . "<input type='checkbox' name= 'refuser[]' value=" . $row['Email'] . ">";
                                echo "</pre>";
                            }
                        } catch (PDOException $e) {
                            die("Error!: " . $e->getMessage() . "<br/>");
                        }
                        ?>
                     
                        <input type="submit" value="Envoyer">
                        <a href="administrateur.php">Retour</a>  
                        </div>
                    </div>
                </div>
                        </form>
                        </body>
                        </html>
