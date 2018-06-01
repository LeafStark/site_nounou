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
        <form method="post" action="bloquer.php">
            <?php
        require_once 'pdoConnexion.php';
        $email = $_SESSION['email'];
        $requet = "select * from `compte`,`nounou`  where `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=0;";
        $resultats = $dbh->query($requet);
        $row = $resultats->fetch();
       print_r($row);
         echo "<pre>";
                    echo $row['Prenom'] . " " . $row['Nom'] . "<ul>";
                    echo "<li>Age: " . $row['Age'] . "</li>";
                    echo "<li>Ville: " . $row['Ville'] . "</li>";
                    echo "<li>Email: " . $row['Email'] . "</li>";
                    echo "<li>Portable: " . $row['Portable'] . "</li>";
                    echo"</ul>";
                    echo "Bloquer" . "<input type='checkbox' name= 'bloquer[]' value=" . $row['Email'] . ">";
                   // echo"Refuser" . "<input type='checkbox' name= 'refuser[]' value=" . $row['Email'] . ">";
         echo "</pre>";
        ?>
            <input type="submit" value="Envoyer">
        </form>
        
    </body>
</html>
