<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bloquer des nounous</title>
    </head>
    <body>
        <form method="post" action="librer.php">
            <?php
        require_once 'pdoConnexion.php';
        $requet = "select * from `compte`,`nounou`  where `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=0;";
        $resultats = $dbh->query($requet);
        $row = $resultats->fetch();
        if(!$row){
            echo 'Pas de nounou bloqué!';
        }else{
            echo "<pre>";
                    echo $row['Prenom'] . " " . $row['Nom'] . "<ul>";
                    echo "<li>Age: " . $row['Age'] . "</li>";
                    echo "<li>Ville: " . $row['Ville'] . "</li>";
                    echo "<li>Email: " . $row['Email'] . "</li>";
                    echo "<li>Portable: " . $row['Portable'] . "</li>";
                    echo"</ul>";
                    echo "Librer" . "<input type='checkbox' name= 'librer[]' value=" . $row['Email'] . ">";
                   // echo"Refuser" . "<input type='checkbox' name= 'refuser[]' value=" . $row['Email'] . ">";
         echo "</pre>";
         echo("<input type='submit' value='Envoyer'>");
        }
         
        ?>
            
        </form>
        <a href="administrateur.php">Retour</a>
    </body>
</html>
