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
        session_start();
        // include 'sauveParentSelection.php';
        require_once 'pdoConnexion.php';
        $email = $_SESSION['email'];
        //echo $email;
        $query = "SELECT `nb_enfant` FROM `parents_cherche` WHERE `email`='$email'";
        $resultat = $dbh->query($query);
        if ($enfant = $resultat->fetch()) {
            //print_r($enfant);
            $nb = $enfant['nb_enfant'];
        }
        
        $prenom = $_POST['prenom'];
        $dateN = $_POST['dateDeNaissance'];
        $restriction = $_POST['restriction'];
<<<<<<< HEAD
       /// print_r($restriction);
//echo $nb;
=======
       // print_r($restriction);
     
echo $nb;
>>>>>>> 83e271e63f709ba5ed66deabd697d21a668ccd0e
        for ($i = 0; $i < $nb; $i++) {
            if (isset($prenom[$i])) {
               echo $prenomE = $prenom[$i];
               echo $date = $dateN[$i];
                echo$restrictionE = $restriction[$i];
             //   echo $restrictionE;
                try {

                    $queryE = "INSERT INTO `enfant` (`Prenom`, `Date_Naissance`, `Restriction`, `parent`) VALUES ('$prenomE', '$date', '$restrictionE', '$email');";
                    $dbh->exec($queryE);

                } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                }
            }
        }
        /*echo("<h1>Les informations des enfants:<h1></br>");
        $queryEnfants = "SELECT * FROM `enfant` WHERE `email`='$email'";
        $resultatEnfants = $dbh->query($queryEnfants);
        if($resultatEnfants->fetch()){
                
             print_r($rows); 
        }
           
       */
          
            //$nb = $enfants['prenom'];
   
        
       // echo("$resultatEnfants");
        ?>
        
        <p>Les informations d'enfant ont été enregisrées!</p>
        <a href="nounouBon.php">Voir les nounous je cherche.</a>
    </body>
</html>
