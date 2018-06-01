<?php

require_once 'pdoConnexion.php';
require_once 'max_id.php';
session_start();
$email = $_SESSION['email'];
$id = table_max_id($dbh, 'disponibilite', 'id_dispo');
//echo $id;
$jour = $_POST['jour'];
$date_debut = $_POST['dateDebut'];
$date_fin = $_POST['dateFin'];
$heureDebut = $_POST['heureDebut'];
$heureFin = $_POST['heureFin'];
try {
    $query="SELECT * FROM `compte` WHERE `login`='$email'";
    $res=$dbh->query($query);
    $r=$res->fetch();
    if($r['status']==1){
        echo "<Script Language='JavaScript'>alert('Il faut valider votre candidature!');</Script>";
    }
    else{
    $queryExiste = "SELECT * FROM `disponibilite` WHERE `email_nounou`='$email'";
    $result = $dbh->query($queryExiste);
    // var_dump($result);
    $nbLigne = count($result->fetchAll());
    //var_dump($nbLigne);
    if ($nbLigne > 0) {
        $queryUp = "UPDATE `disponibilite` SET `id_dispo`='$id',`jour`='$jour',`date_debut`='$date_debut',`date_fin`='$date_fin',`heure_debut`='$heureDebut', `heure_fin`='$heureFin' WHERE `disponibilite`.`email_nounou`='$email' ;";
        $dbh->exec($queryUp);
     
    } else {
        $query = "INSERT INTO `disponibilite` (`id_dispo`, `jour`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `email_nounou`) VALUES ('$id', '$jour', '$date_debut', '$date_fin', '$heureDebut', '$heureFin', '$email');";
        $dbh->exec($query);
    }
    }
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}

echo "<p><a href=nounou.php>Retour</a></p>";
