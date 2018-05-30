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
        require 'sauveParentSelection.php';
        require_once 'pdoConnexion.php';
        session_start();
        
        if ($type == 'Garde ponctuelle') {
            $query = "SELECT * FROM `nounou` WHERE `type`='Garde ponctuelle'";
            foreach ($dbh->query($query) as $row) {
                print_r($row); 
            }
        } elseif ($type == 'Garde d’enfant régulière') {
            $query = "SELECT * FROM `nounou` WHERE `type`='Garde d’enfant régulière'";
            foreach ($dbh->query($query) as $row) {
                print_r($row);
            }
        } elseif ($type == 'Garde d\'enfant en langues étrangères') {
            $query = "SELECT * FROM `nounou` WHERE `type`='Garde d\'enfant en langues étrangères'";
            foreach ($dbh->query($query) as $row) {
                print_r($row);
        }
        }
        ?>
    </body>
</html>
