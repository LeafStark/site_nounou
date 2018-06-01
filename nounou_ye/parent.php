<?php
session_start();
require_once 'pdoConnexion.php';

$email = $_SESSION['email'];
$requet = "select * from parents where Email = '$email'";
$resultats = $dbh->query($requet); 
$row = $resultats->fetch(); 
//print_r($row);
    echo("<h1>Page du ".$row['Nom_F']."<h1>");
    
                echo "<pre>";
                echo "<ul>";
                echo "<li>Ville: ".$row['Ville']."</li>";
                echo "<li>Email: ".$row['Email']."</li>";
                echo "<li>Information: ".$row['Information']."</li>";
                echo"</ul>";
               //echo "Valider"."<input type='checkbox' name= 'valider[]' value=".$row['Email'].">";
              // echo"Refuser"."<input type='checkbox' name= 'refuser[]' value=".$row['Email'].">";
                echo "</pre>";

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



