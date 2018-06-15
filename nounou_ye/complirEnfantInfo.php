<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
 <script>
            function alertI() {
                var input = document.getElementById('enfant');
                for (var i = 0; i < 5; i++) {
                    input.innerHTML = "<div class='form-group'><input type='text' name='prenom[]' placeholder='Prénom enfant' required='true'></div><div class='form-group'><input type='date' name='dateNaissance[]' placeholder='Date de Naissance' required='true'></div><div classclass='form-group'><input type='text' name='restriction[]' placeholder='Restriction Alimentaire' required='true'></div>";
                }
            }

        </script>
每次下单要更新孩子数
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
        <title>Complir information d'enfant</title>
    </head>
    <body>
        <form method="post" action="postEnfant.php">
            <?php
            session_start();
            // include 'sauveParentSelection.php';
            require_once 'pdoConnexion.php';
             require_once 'navbar.html';
            $email = $_SESSION['email'];
           // var_dump($_POST);
            //echo $email;
            $query = "SELECT `nb_enfant` FROM `parents_cherche` WHERE `email`='$email'";
            $resultat = $dbh->query($query);
         
            if ($enfant = $resultat->fetch()) {
                //print_r($enfant);
                $nb = $enfant['nb_enfant'];
            }else{
                $nb=$_SESSION['nb'];
            }
            echo("<br>");
            echo ("<div><p><strong>Vous avez $nb enfants, completez des infomations, s'il vous plait.</strong></p></div>");

            function echoEnfant($b) {
                
                for ($i = 0; $i < $b; $i++) {
                    echo <<< STO
        
                <div id='enfant'>
                    <input type="text" name="prenom[]" placeholder="Prénom d'enfant" >
                
                    <input type="date" name="dateDeNaissance[]" placeholder="Date de Naissance" >
                
                    <input type="text" name="restriction[]" placeholder="Restriction Alimentaire">
             
STO;
                }
            }

            echoEnfant($nb);
            ?>
            <input type='submit' value='Envoyer'>
        </form>
    </body>
</html>
