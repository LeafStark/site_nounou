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
        <script src="jquery-3.3.1.min.js"></script>
    </head>
    <body>

        <?php
        require_once"pdoConnexion.php";
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
            ?>
            <form method="post" action="valider.php">
                <?php
                echo("Voici la liste des candidatures des nounous en attene de validation" . "<br/>");
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
        </form>
    </body>
</html>
