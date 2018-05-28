<?php

require_once 'getPhoto.php';
require_once 'pdoConnexion.php';
session_start();
$email = $_SESSION['email'];
echo $email;
//$type_garde = $_POST["type_garde"];
$experience = $_POST["experience"];
$presentation = $_POST["presentation"];
try {
    $query="UPDATE `nounou` SET `Experience` = '$experience', `Presentation` = '$presentation' WHERE `nounou`.`Email` = '$email';";
    $dbh->exec($query);
    echo 'bon';
}  catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
