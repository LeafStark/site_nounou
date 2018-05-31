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
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];
        $nbEnfant = $_POST['enfants'];
        /*echo $type;
        echo $dateDebut;
        echo $dateFin;
        echo $nbEnfant;
        echo $email;*/
        try {
            $query = "INSERT INTO `parents_cherche` (`email`, `type_nounou`, `date_debut`, `date_fin`, `nb_enfant`) VALUES ('$email', '$type', '$dateDebut', '$dateFin', '$nbEnfant')";
            //$queryUp = "UPDATE `parents_cherche` SET `email`=$email,`type_nounou`=$type,`date_debut`=$dateDebut,`date_fin`=$dateFin,`nb_enfant`=$nbEnfant WHERE  `email`=$email ";
            $dbh->exec($query);
            $dbh->exec($queryUp);
            header('Location:complirEnfantInfo.php');
        } catch (PDOException $e) {
            die("Error!: " . $e->getMessage() . "<br/>");
        }// put your code here
        ?>
    </body>
</html>
