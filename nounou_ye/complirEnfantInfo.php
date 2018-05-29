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
        <script>
            function alertI(){
                 var input = document.getElementById('enfant');
                 input.innerHTML="<div class='form-group'><input type='text' name='prenom' placeholder='Prénom enfant' required='true'></div><div class='form-group'><input type='date' name='dateNaissance' placeholder='Date de Naissance' required='true'></div><div classclass='form-group'><input type='text' name='restriction' placeholder='Restriction Alimentaire' required='true'></div>";
                        
            }
            
            </script>
        <meta charset="UTF-8">
        <title>Complir information d'enfant</title>
    </head>
    <body>
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
        <form method="post" action="getEnfantInfo.php">
        <div id='enfant'>
        
            <div class="form-group">
                <input type="text" name="prenom" placeholder="Prénom d'enfant" required="true">
            </div>
            <div class="form-group">
                <input type="date" name="dateDeNaissance" placeholder="Date de Naissance" required="true">
            </div>
            <div class="form-group">
                <input type="text" name="restriction" placeholder="Restriction Alimentaire">
            </div>
            <div>
                <input type="button" id='addEnfant' onclick="alertI()" value="Ajouter">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
        </div>
    </body>
</html>
