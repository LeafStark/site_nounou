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

        <form method="post" action="confirmCommande.php">
            <?php
            session_start();
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
            <div>
                Le nounou est:
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
            echo "Le coût total est " . $money . " euro<br />";
            echo("<input type='hidden' name='heure' value='$heure'>");
            echo("<input type='hidden' name='money' value='$money'>");
            ?>
            <input type="submit" value="Je confirme">

        </form>

    </body>
</html>
