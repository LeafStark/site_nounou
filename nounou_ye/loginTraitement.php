<?php

session_start();
require_once 'pdoConnexion.php';
$email = $_POST['email'];
$password = $_POST['motDePasse']; /*
  $requet="SELECT * FROM `compte` where `login` = '$email'";
  $resultats=$dbh ->query($requet);
  while ($row=$resultats->fetch()){
  echo "<pre>";
  print_r ($row);
  echo "</pre>";} */
//if (($_POST['email'] != null) && ($_POST['motDePasse'] != null)) {

try {
    //$requet = "SELECT * FROM `compte` where `login` = '$email'";
    //$res = $dbh->query($requet);
    //echo("$res");
    while ($resultat = $res->fetch()) {
        print_r($resultat);
        if ($resultat['mot_de_passe'] == $password) {
            //echo '2';
            $_SESSION['email'] = $email;
            $_SESSION['motDePasse'] = $password;
            $requet_status = "SELECT `role` FROM `compte` WHERE `login`='$email'";
            $res_role = $dbh->query($requet_status);
            while ($res_s = $res_role->fetch()) {
                print_r($res_s);
                $_SESSION['type'] = $res_s['role'];
                if ($_SESSION['type'] == "parents") {
                    header('Location:parent.php');
                } elseif ($_SESSION['type'] == "nounou") {
                    header('Location:nounou.php');
                }
            }
        }
    }
} catch (Exception $ex) {
    die($ex->getMessage());
}
?>
