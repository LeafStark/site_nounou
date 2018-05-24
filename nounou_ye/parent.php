<?php
session_start();
require_once 'pdoConnexion.php';

$email = $_SESSION['email'];
$requet = "select * from parents where Email = '$email'";
$resultats = $dbh->query($requet);
while ($row = $resultats->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

echo "$email";
echo("parent 的页面");
?>
