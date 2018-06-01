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
    </head>
    <body>
        <?php
        //require 'sauveParentSelection.php';
        require_once 'pdoConnexion.php';
        session_start();
        $email = $_SESSION['email'];
        $requet = "SELECT * FROM `parents_cherche` where `email` = '$email';";

        $res = $dbh->query($requet);
        $resultat = $res->fetch();
        $type = $resultat['type_nounou'];
        $dateDebut = $resultat['date_debut'];
        $dateFin = $resultat['date_fin'];
       // var_dump($dateFin);
        $requetN = "SELECT * FROM `nounou` where `type` = '$type';";
        $resN = $dbh->query($requetN);
        $resultatN = $resN->fetchAll();
       // print_r($resultatN);
        $rows = count($resultatN);
        //echo $rows;
        if ($rows != 0) {
            for ($i = 0; $i < $rows; $i++)
                if ($resultatN[$i]['type'] == $type) {
                    $e = $resultatN[$i]['Email'];
                    $requetT = "SELECT * FROM `disponibilite` where `email_nounou` = '$e';";
                    $resT = $dbh->query($requetT);
                    $t = $resT->fetch();
                    //var_dump($t);
                    if (intval($t['date_debut']) <= intval($dateDebut)and intval($t['date_fin']) >= $dateFin) {
                        $prenomN = $resultatN[$i]['Prenom'];
                        $ageN = $resultatN[$i]['Age'];
                        $villeN = $resultatN[$i]['Ville'];
                        $emailN = $resultatN[$i]['Email'];
                        $portableN = $resultatN[$i]['Portable'];
                        $experienceN = $resultatN[$i]['Experience'];
                        
                        echo("<form method='post' action='commande.php'>");
                        echo "<pre>";
                        echo $resultatN[$i]['Prenom'] . " " . $resultatN[$i]['Nom'] . "<ul>";
                        echo("<input type='hidden' name='prenom' value='$prenomN']'>");
                        echo "<li>Age: " . $resultatN[$i]['Age'] . "</li>";
                        echo("<input type='hidden' name='age' value='$ageN']'>");
                        echo "<li>Ville: " . $resultatN[$i]['Ville'] . "</li>";
                        echo("<input type='hidden' name='ville' value='$villeN']'>");
                        echo "<li>Email: " . $resultatN[$i]['Email'] . "</li>";
                        echo("<input type='hidden' name='email' value='$emailN']'>");
                        echo "<li>Portable: " . $resultatN[$i]['Portable'] . "</li>";
                        echo("<input type='hidden' name='portable' value='$portableN']'>");
                        echo "<li>Experience: " . $resultatN[$i]['Experience'] . "</li>";
                        echo("<input type='hidden' name='experience' value='$experienceN']'>");
                        echo"</ul>";

                        echo "</pre>";
                        echo("<input type='submit' value='Je choisis'>");
                        echo("</form>");
                    }
                }

        }
        else{
            echo 'Pas de nounou propre';
            echo("<a href='parentCherche.php'> Essayer encore une fois!</a>");
        }
        ?>
    </body>
</html>
