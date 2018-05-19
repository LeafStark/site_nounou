<?php
require ("connexion.php");
session_start();
$nom = mysqli_real_escape_string($con,$_POST['nom']);
$ville = mysqli_real_escape_string($con,$_POST['ville']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$paasword = md5(mysqli_real_escape_string($con,$_POST['motDePasse']));
$infoGene = mysqli_real_escape_string($con,$_POST['informationGenerale']);

$duplicate_email_query = "select * from parents where Email='$email'";
$duplicate_email_result = mysqli_query($con, $duplicate_email_query) or die(mysqli_error($con));
$rows = mysqli_affected_rows($duplicate_email_result);
if($rows!=0){
?>
<script>
    window.alert("Votre compte a déjà existé！！");
    </script>
    <?php
}  
else{
   $parentQuery = "insert into parents(Nom_F,Ville,Email,Information) values ('$nom','$ville','$email','$infoGene')";
   $parent_result = mysqli_query($con, $parentQuery) or die(mysqli_error($con));
   echo("Votre compte a déjà inscrit.");
   
}
?>