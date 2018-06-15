<?php

require_once 'pdoConnexion.php';
if(isset($_POST['valider'])){
$valider = $_POST['valider'];
//var_dump($valider);
foreach ($valider as $email) {
    try {
        $query = "UPDATE `compte` SET `status`=2 WHERE `compte`.`login` = '$email';";
        $dbh->exec($query);
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage() . "<br/>");
    }
}
}
if(isset($_POST['refuser'])){$refuser = $_POST['refuser'];
foreach ($refuser as $email) {
    try {
        $query1 = "DELETE FROM `compte` WHERE `compte`.`login` = '$email';";
        $query2 = "DELETE FROM `nounou` WHERE `nounou`.`Email` = '$email'";
        $dbh->exec($query1);
        $dbh->exec($query2);
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage() . "<br/>");
    }
}}
echo("<a href='administrateur.php'>Retour</a>");
?>