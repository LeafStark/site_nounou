<html>
    <head><link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script></head>
<?php
require_once 'navbar.html';
require_once"pdoConnexion.php";
require_once 'max_id.php';
/*$requet = "select * from nounou";
$resultats = $dbh->query($requet);
while ($row = $resultats->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}*/
$id = table_max_id($dbh, 'nounou', 'ID_N');
$email = $_POST['email'];
$password = $_POST['mot'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$ville = $_POST['ville'];
$portable = $_POST['portable'];
$langue = $_POST['langue'];

try {
    $nounouQuery = "INSERT INTO `nounou` (`ID_N`, `Nom`, `Prenom`, `Ville`, `Email`, `Portable`,`Langue`, `Age`, `Experience`, `Presentation`,`Evaluation`,`Salaire`,`type`) VALUES ('$id', '$nom', '$prenom', '$ville', '$email', '$portable','$langue', $age, '', '',0,0,'');";
    $compteQuery = "INSERT INTO `compte` (`login`, `mot_de_passe`, `status`, `role`) VALUES ('$email', '$password', '1', 'nounou');";
    $dbh->exec($nounouQuery);
    var_dump( $dbh->exec($nounouQuery));
    $dbh->exec($compteQuery);
 
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
$dbh = null;
echo("<br /><br /><br />Votre compte a déjà inscrit.");?>
    <p><a href="nounou.php">Aller!</a></p>
</html>