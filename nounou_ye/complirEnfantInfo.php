<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
每次下单要更新孩子数
-->
<html>
    <head>
        <script type='text/javascript' src='getEnfant.js'></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <button onclick="echoEnfant()">a</button>
        <?php
        session_start();
       // include 'sauveParentSelection.php';
        require_once 'pdoConnexion.php';
        $email = $_SESSION['email'];
        echo $email;
        $query = "SELECT `nb_enfant` FROM `parents_cherche` WHERE `email`='$email'";
        $resultat = $dbh->query($query);
        if($enfant=$resultat->fetch()){
            //print_r($enfant);
            $nb = $enfant['nb_enfant'];
        }
        echo ("Vous avez $nb enfants, completez des infomations, s'il vous plait.");
        
        ?>
    </body>
</html>
