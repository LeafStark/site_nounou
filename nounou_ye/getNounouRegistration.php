<?php
require_once"pdoConnexion.php";
require_once 'max_id.php';
require_once 'getPhoto.php';
$requet="select * from nounou";
    $resultats=$dbh ->query($requet);
     while ($row=$resultats->fetch()){
        echo "<pre>";
        print_r ($row);
     echo "</pre>";}
$id=table_max_id($dbh,'nounou','ID_N');
$email = $_POST['email'];
$paasword =$_POST['mot'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$ville = $_POST['ville'];
$portable = $_POST['portable'];
$experience =$_POST['experience'];
$presentation = $_POST['presentation'];
echo $id.'<br/>';
echo $nom.'<br/>';
echo $prenom."<br/>";
echo $ville."<br/>";
echo $email."<br />";
echo $portable."<br />";
echo $age."<br />";
echo $experience."<br />";
echo $presentation;

  // $nounouQuery = "insert into nounou(ID_N,Nom,Prenom,Ville,Email,Portable,age,experience,presentation) values ('$id','$nom','$prenom',$ville','$email','$portable','$age','$experience','$presentation')";
try{$nounouQuery = "INSERT INTO `nounou` (`ID_N`, `Nom`, `Prenom`, `Ville`, `Email`, `Portable`, `Langue`, `Age`, `Experience`, `Presentation`, `Evaluation`, `Salaire`) VALUES ('$id', '$nom', '$prenom', '$ville', '$email', '$portable', '', 33, '33', '33', '11', '22');";
$dbh->exec($nounouQuery);
echo 1;
}
  catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
   echo("Votre compte a déjà inscrit.");