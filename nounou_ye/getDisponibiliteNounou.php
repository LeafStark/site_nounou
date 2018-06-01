<?php
require_once 'pdoConnexion.php';
require_once 'max_id.php';
session_start();
$email=$_SESSION['email'];
$id=table_max_id($dbh, 'disponibilite', 'id_dispo');
//echo $id;
$jour=$_POST['jour'];
$date_debut=$_POST['dateDebut'];
$date_fin=$_POST['dateFin'];
$heureDebut= $_POST['heureDebut'];
$heureFin= $_POST['heureFin'];
try {
    $query = "INSERT INTO `disponibilite` (`id_dispo`, `jour`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `email_nounou`) VALUES ('$id', '$jour', '$date_debut', '$date_fin', '$heureDebut', '$heureFin', '$email');";
    $dbh->exec($query);
   
 
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
 echo  "<p><a href=nounou.php>Retour</a></p>";
