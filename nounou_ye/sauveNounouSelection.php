<?php


require_once 'pdoConnexion.php';
session_start();
$email = $_SESSION['email'];
require_once 'getPhoto.php';
$type_garde = $_POST["type_garde"];
echo  $type_garde;
$experience = $_POST["experience"];
$presentation = $_POST["presentation"];
try {
    $query="UPDATE `nounou` SET `Experience` = '$experience', `Presentation` = '$presentation',`type`='$type_garde' WHERE `nounou`.`Email` = '$email';";
    $dbh->exec($query);
    echo 'bon';
}  catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
}
