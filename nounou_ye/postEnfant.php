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
        <title>Info confirmée</title>
    </head>
    <body>
        <?php
        session_start();
        // include 'sauveParentSelection.php';
        require_once 'pdoConnexion.php';
        require_once 'navbar.html';
        $email = $_SESSION['email'];
        //echo $email;
        $query = "SELECT `nb_enfant` FROM `parents_cherche` WHERE `email`='$email'";
        $resultat = $dbh->query($query);
        if ($enfant = $resultat->fetch()) {
            //print_r($enfant);
            $nb = $enfant['nb_enfant'];
        }
        else{
            $nb = $_SESSION['nb'];
        }

        $prenom = $_POST['prenom'];
       // var_dump( $prenom);
        $dateN = $_POST['dateDeNaissance'];
        $restriction = $_POST['restriction'];

        // print_r($restriction);
//echo $nb;
        if ($prenom[0]!=null) {
            for ($i = 0; $i < $nb; $i++) {
                $prenomE = $prenom[$i];
                $date = $dateN[$i];
                $restrictionE = $restriction[$i];
                //$restrictionE;
                echo("<br>");
                try {
                    $queryTest = "SELECT e.*,p.ID_P FROM `enfant` AS e,`parents` AS p WHERE `parent`=p.Email AND p.Email='$email'";
                    $resultTest = $dbh->query($queryTest);
                    $rowTest = $resultTest->fetch();
                   // var_dump($rowTest);
                  //  $idP = $rowTest['parent'];
                    //print_r($rowTest);
                    if ($rowTest != null) {
                        $deleteQ = "DELETE FROM `enfant` WHERE `parent`='$email'";

                        // INSERT INTO `enfant`(`Prenom`, `Date_Naissance`, `Restriction`, `parent`) VALUES ('a','2018-08-08','s',2)
                        $queryE = "INSERT INTO `enfant` (`Prenom`, `Date_Naissance`, `Restriction`, `parent`) VALUES ('$prenomE', '$date', '$restrictionE', '$email');";
                        $dbh->exec($deleteQ);
                        $dbh->exec($queryE);
                    } else {
                        //echo 1;
                        $queryE = "INSERT INTO `enfant` (`Prenom`, `Date_Naissance`, `Restriction`, `parent`) VALUES ('$prenomE', '$date', '$restrictionE', '$email');";
                        //$queryE = "INSERT INTO `enfant`(`Prenom`) VALUES ('ss');";
                       $dbh->exec($queryE);
                    }
                    ?>
                    <p>Les informations d'enfant ont été enregisrées!</p>
                    <a href="nounouBon.php">Voir les nounous je cherche.</a>
                    <?php
                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                }
            }
        } else {
            echo("</br>");
            echo("<p><strong>Vous n'avez pas enregistré les infos d'enfants!<strong></p>");
            echo("<a href=\"complirEnfantInfo.php\">Retour</a> ");
        }
        /* echo("<h1>Les informations des enfants:<h1></br>");
          $queryEnfants = "SELECT * FROM `enfant` WHERE `email`='$email'";
          $resultatEnfants = $dbh->query($queryEnfants);
          if($resultatEnfants->fetch()){

          print_r($rows);
          }

         */

        //$nb = $enfants['prenom'];
        // echo("$resultatEnfants");
        ?>


    </body>
</html>
