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
        require_once 'pdoConnexion.php';

        $email = $_SESSION['email'];
        $type = $_POST["nounou_type"];
        $dateDebut = $_POST['dateDebutN'];
        $dateFin = $_POST['dateFinN'];
        $heureDebut = $_POST['heureDebutN'];
        $heureFin = $_POST['heureFinN'];
        $jour = $_POST['jour'];
        $nbEnfant = $_POST['enfants'];
        
        echo $type;
        echo $heureDebut;
        echo $heureFin;
        echo $nbEnfant;
        echo $email;
        try {
            $queryExiste = "SELECT * FROM `parents_cherche` WHERE `email`='$email'";
            $result = $dbh->query($queryExiste);
            // var_dump($result);
            $nbLigne = count($result->fetchAll());
            var_dump($nbLigne);
            if ($nbLigne > 0) {
                $queryUp = "UPDATE `parents_cherche` SET `email`='$email',`type_nounou`='$type',`jour`='$jour',`date_debut`='$dateDebut',`date_fin`='$dateFin',`heure_debut`='$heureDebut', `heure_fin`='$heureFin',`nb_enfant`=$nbEnfant WHERE `email`='$email' ";
                $dbh->exec($queryUp);
                header('Location:complirEnfantInfo.php');
            } else {
                $query = "INSERT INTO `parents_cherche`(`email`, `type_nounou`,`jour`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `nb_enfant`) VALUES ('$email', '$type','$jour', '$dateDebut', '$dateFin','$heureDebut','$heureFin ','$nbEnfant')";

                $dbh->exec($query);
                $_SESSION['nb']=$nbEnfant;
                header('Location:complirEnfantInfo.php');
            }
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage() . "<br/>");
        }// put your code here
        ?>
    </body>
</html>
