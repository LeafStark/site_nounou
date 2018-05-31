<?php
require_once 'table.php';
require_once 'pdoConnexion.php';
session_start();
$email=$_SESSION['email'];
$requet = "SELECT * FROM `disponibilite` where `email_nounou` = '$email';";

    $res = $dbh->query($requet);
    $resultat = $res->fetchAll();
    //var_dump($resultat);
     $rows = count($resultat);
     for($i=0;$i<$rows;$i++){
         if ($resultat[$i]['email_nounou'] == $email){
             $type=$resultat[$i]['jour'];
             $debut=$resultat[$i]['heure_debut'];
             $fin=$resultat[$i]['heure_fin'];
         }
     }
     table($type,$debut,$fin);