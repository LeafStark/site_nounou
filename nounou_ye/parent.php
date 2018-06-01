<?php
session_start();
require_once 'pdoConnexion.php';

$email = $_SESSION['email'];
$requet = "select * from parents where Email = '$email'";
$resultats = $dbh->query($requet);
$row = $resultats->fetch();
//print_r($row);
    echo("Page du ");
    echo $row['Nom_F'];
?>
<html>
    <body>
        <div>
           <a href="parentCherche.php">Modifier la cherche</a>
        </div>
        <div>
           <a href="nounouBon.php">Voir les nounous je cherche.</a>
        </div>
    </body>
</html>



