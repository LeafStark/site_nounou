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
        require_once 'pdoConnexion.php';
        $bloquer = $_POST['bloquer'];
        foreach ($bloquer as $email) {
            try {
                $query = "UPDATE `compte` SET `status`=0 WHERE `compte`.`login` = '$email';";
                $dbh->exec($query);
            } catch (PDOException $e) {
                die("Error!: " . $e->getMessage() . "<br/>");
            }
        }
        ?>
         <a href="administrateur.php">Retour</a>
    </body>
</html>
