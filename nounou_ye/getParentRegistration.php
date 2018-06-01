<?php

/*
  require ("connexion.php");
  session_start();
  $nom = mysqli_real_escape_string($dbh, $_POST['nom']);
  $ville = mysqli_real_escape_string($dbh, $_POST['ville']);
  $email = mysqli_real_escape_string($dbh, $_POST['email']);
  $paasword = md5(mysqli_real_escape_string($dbh, $_POST['motDePasse']));
  $infoGene = mysqli_real_escape_string($dbh, $_POST['informationGenerale']);

  $duplicate_email_query = "select * from parents where Email='$email'";
  $duplicate_email_result = mysqli_query($dbh, $duplicate_email_query) or die(mysqli_error($dbh));
  $rows = mysqli_affected_rows($duplicate_email_result);
  if ($rows != 0) {
  ?>
  <script>
  window.alert("Votre compte a déjà existé！！");
  </script>
  <?php

  } else {
  $parentQuery = "insert into parents(Nom_F,Ville,Email,Information) values ('$nom','$ville','$email','$infoGene')";
  $parent_result = mysqli_query($dbh, $parentQuery) or die(mysqli_error($dbh));
  echo("Votre compte a déjà inscrit.");
  }
  ?>
  <?php
 */
require_once"pdoConnexion.php";
require_once 'max_id.php';

$requet = "select * from parents";
$resultats = $dbh->query($requet);
while ($row = $resultats->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
$id_p = table_max_id($dbh, 'parents', 'ID_P');
$nom = $_POST['nom'];
$ville = $_POST['ville'];
$email = $_POST['email'];
$password = $_POST['motDePasse'];
$infoGene = $_POST['informationGenerale'];
echo ("$nom");
/*
  $duplicate_email_query = "select * from parents where Email='$email'";
  $duplicate_email_result = $dbh->query($duplicate_email_query);
  $rows = $duplicate_email_result->rowCount();
  if ($rows != 0) {
  ?>
  <script>
  window.alert("Votre compte a déjà existé！！");
  </script>
  <?php

  } else { */
try {
  
    $parentQuery ="INSERT INTO `parents` (`ID_P`, `Nom_F`, `Ville`, `Email`, `Information`) VALUES ('$id_p', '$nom', '$ville', '$email', '$infoGene')";
    $compteQuery_p= "INSERT INTO `compte` (`login`, `mot_de_passe`, `status`, `role`) VALUES ('$email', '$password', '2', 'parent');";
  //  $compteQuery_p ="INSERT INTO `compte` (`login`, `mot_de_passe`, `status`, `role`) VALUES ('$email', '$password', '1', 'parent');";
    $dbh->exec($parentQuery);
    $dbh->exec($compteQuery_p);
    header('Location:signin.html');
} catch (Exception $ex) {
    die("Il y un erreur!" . $ex->getMessage());
}
?>