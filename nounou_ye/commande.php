<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
        <title>Votre commande</title>
    </head>
    <body>

        <form method="post" action="confirmCommande.php">
            <?php
            session_start();
            require_once 'navbar.html';
            $emailP = $_SESSION['email'];
            //echo $emailP;
            $prenomN = $_POST['prenom'];
            // echo $age = $_POST['age'];
            $villeN = $_POST['ville'];
            $emailN = $_POST['email'];
            $portableN = $_POST['portable'];
            $experienceN = $_POST['experience'];
            $heure = $_POST['heure'];
            $money = $_POST['money'];
            $array = array("Prenom" => "$prenomN", "Ville" => "$villeN", "Email" => "$emailN", "Portable" => $portableN, "Experience" => "$experienceN");
            //print_r($array);
            ?>
            <div>
                <h1>
                    Vous avez réussir de choisir un nounou!
                </h1>
            </div>
            <div class="container">
                <h2>
                Le nounou est:
                </h2>
                <?php

                function echoCommande($a) {
                    //$array = array($prenom=>$pre,$ville=>$v,$portable=>$por,$experience=>$ex);
                    echo("<ol>");
                    foreach ($a as $key => $value) {
                        //echo $value;
                        echo("<li>");
                        echo($key . ":<br>");
                        echo($value);
                        echo("<input type='hidden'  name ='$key' value='$value'>");
                        echo("</li>");
                    }
                    echo("</ol>");
                }

                echoCommande($array);
                ?>
            </div>
            <?php
            echo "<p><strong>Le coût total est " . $money . " euro<br /><p><strong>";
            echo("<input type='hidden' name='heure' value='$heure'>");
            echo("<input type='hidden' name='money' value='$money'>");
            ?>
            
            <input type="submit" value="Je confirme">

        </form>

    </body>
</html>
