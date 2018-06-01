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
        $email=$_SESSION['email'];
        $requet = "SELECT * FROM `parents_cherche` where `email` = '$email';";
    $res = $dbh->query($requet);
    $resultat = $res->fetch();
    $type=$resultat['type_nounou'];
    $dateDebut=$resultat['date_debut'];
    $dateFin=$resultat['date_fin'];
  $requetN = "SELECT * FROM `nounou` where `type` = '$type';";
    $resN = $dbh->query($requetN);
    $resultatN = $resN->fetchAll();
    $rows = count($resultatN);
    if($rows!=0){
    for($i=0;$i<$rows;$i++)
       
        if ($resultatN[$i]['type'] == $type ) 
        {$e=$resultatN[$i]['Email'];
            $requetT = "SELECT * FROM `disponibilite` where `email_nounou` = '$e';";
    $resT = $dbh->query($requetT);
    $t=$resT->fetch();
    //var_dump($t);
    echo intval($t['date_debut']);
    echo intval($t['date_fin']);
    if(intval($t['date_debut'])<= intval($dateDebut)and intval($t['date_fin'])>=$dateFin)
    {
                echo "<pre>";
                echo $resultatN[$i]['Prenom']." ".$resultatN[$i]['Nom']."<ul>";
                echo "<li>Age: ".$resultatN[$i]['Age']."</li>";
                echo "<li>Ville: ".$resultatN[$i]['Ville']."</li>";
                echo "<li>Email: ".$resultatN[$i]['Email']."</li>";
                echo "<li>Portable: ".$resultatN[$i]['Portable']."</li>";
                echo "<li>Experience: ".$resultatN[$i]['Experience']."</li>";
                echo"</ul>";
               echo "<a href='commande.php'>Choisissez ce nounou</a>";
                echo "</pre>";
            }
        }
        }
    
        ?>
    </body>
</html>
