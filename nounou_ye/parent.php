<?php
session_start();
require_once 'pdoConnexion.php';

$email = $_SESSION['email'];
$requet = "select * from parents where Email = '$email'";
$resultats = $dbh->query($requet);

$requetCherche = "SELECT `type_nounou`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `nb_enfant` FROM `parents_cherche` WHERE email = '$email'";
$resultatCherche = $dbh->query($requetCherche);

$row = $resultats->fetch();
$rowCherche = $resultatCherche->fetch();
//$rowCommande = $resultatCommande->fetch();
//print_r($row);
//个人信息
echo("<h1>Page du " . $row['Nom_F'] . "<h1>");
echo("<div>");
echo "<pre>";
echo "<ul>";
echo "<li>Ville: " . $row['Ville'] . "</li>";
echo "<li>Email: " . $row['Email'] . "</li>";
echo "<li>Information: " . $row['Information'] . "</li>";
echo"</ul>";
//echo "Valider"."<input type='checkbox' name= 'valider[]' value=".$row['Email'].">";
// echo"Refuser"."<input type='checkbox' name= 'refuser[]' value=".$row['Email'].">";
echo "</pre>";
echo("</div>");
//print_r($rowCherche);
//保姆预存信息
echo("<h1>Votre nounou cherche est: </h1>");
if ($rowCherche != null) {
    foreach ($rowCherche as $key => $value) {
       
            if (!is_integer($key)) {
                echo("<div>");
                echo("<ul>");
                echo("<li>$key : $value</li>");
                echo("</ul>");
                echo("</div>");
                continue;
           
        }
    }
} else {
    echo("Vide!");
    echo("Cliquer le lien \"Modifier la cherche\" pour le chercher");
}
?>
<html>
    <body>
        <div>
            <a href="parentCherche.php">Modifier la cherche</a>
        </div>
        <div>
            <a href="nounouBon.php">Voir les nounous je cherche.</a>
        </div>
        <div>
            <a href='commandeEffectue.php'>Mes commandes</a>
        </div>
    </body>
</html>



