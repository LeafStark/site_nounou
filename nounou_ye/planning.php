<html>
    <head><link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script></head>
<?php
require_once 'table.php';
require_once 'pdoConnexion.php';
require_once 'navbar.html';
session_start();
$email=$_SESSION['email'];
$requet = "SELECT * FROM `disponibilite`,`compte` WHERE `disponibilite`.`email_nounou`=`compte`.`login`;";

    $res = $dbh->query($requet);
    //var_dump($res);
   while( $resultat = $res->fetch())
   {
         if ($resultat['email_nounou'] == $email){
             $type=$resultat['jour'];
             $debut=$resultat['heure_debut'];
             $fin=$resultat['heure_fin'];
         }
     }?>
     <br /><br /><br />  <center><h1>Planning</h1></center>   
     <br /><br/>
     <div style='margin:auto;width:550px;'>  
         
     <?php
     table($type,$debut,$fin);
          echo("<br/><a href='nounou.php'>Retour</a>");
     echo"</div>";

     ?>

</html>