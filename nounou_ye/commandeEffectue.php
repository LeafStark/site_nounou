<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        require_once 'pdoConnexion.php';
        
        $email = $_SESSION['email'];
        //echo $email;
        //$requetCommande = "select * from `nounou`";
        $requetCommande = "SELECT n.`Nom`, n.`Prenom`, n.`Ville`, n.`Email`, n.`Portable`,n.`Evaluation`,c.`Duree`, c.`Salaire` FROM `nounou` AS n, `commande` AS c WHERE c.Email_P = '$email'AND c.Email_N=n.`Email`";
        $resultatCommande = $dbh->query($requetCommande);
        $rowCommande = $resultatCommande->fetch();
       // echo var_dump($rowCommande);
         //echo $rowCommande['Email'];
          if($rowCommande!=null){
               foreach ($rowCommande as $key => $value) {
       
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
        
        <form method="post" action="evaluer.php">
            <input type="radio" name="evaluation" value="1"> 1 
           <input type="radio" name="evaluation" value="2"> 2
           <input type="radio" name="evaluation" value="3"> 3
           <input type="radio" name="evaluation" value="4"> 4
           <input type="radio" name="evaluation" value="5"> 5
           <?php
           $e = $rowCommande['Email'];
           echo("<input type='hidden' name='emailN' value=$e>");
           ?>
        <input type="submit" value="Evaluer">
        </form>
    </body>
   
</html>