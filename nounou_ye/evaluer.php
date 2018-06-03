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
        require_once 'pdoConnexion.php';
    $evaluation = $_POST['evaluation'];
    $emailN = $_POST['emailN'];
    
    $requetEvaA="SELECT `Evaluation` FROM `nounou` WHERE `Email`='$emailN'";
    $resA = $dbh->query($requetEvaA);
   $rowA = $resA->fetch();
 //  $statusEva = $rowA['Status'];

    $evaluationNouveau = ($rowA['Evaluation']+$evaluation)/2;
    $requetEva = "UPDATE `nounou` SET `Evaluation`='$evaluationNouveau' WHERE `Email`='$emailN'";
    $requetEvaStatus= "UPDATE `commande` SET `Status`= 1 WHERE `Email`='$emailN'";
    $resultatEva = $dbh->exec($requetEva);
    $resultatEvaStatus = $dbh->exec($requetEvaStatus);
    echo 'Votre evaluation a déja été enregistrée.';
    ?>
    </body>
</html>
