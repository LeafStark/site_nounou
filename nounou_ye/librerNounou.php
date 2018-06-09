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
        <title>Bloquer des nounous</title>
    </head>
    <body>
        <form method="post" action="librer.php">
            <?php
            require_once 'pdoConnexion.php';
            require_once 'navbar.html';
            $requet = "select * from `compte`,`nounou`  where `nounou`.`Email`=`compte`.`login` AND `compte`.`status`=0;";
            $resultats = $dbh->query($requet);
            $row = $resultats->fetch();
            echo "<br/>";
            if (!$row) {
                echo("</br>");
                echo "<p></strong>Pas de nounou bloqué!</strong></p>";
            } else {
                ?>
                <div class="container marketing">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            echo "<pre>";
                            echo $row['Prenom'] . " " . $row['Nom'] . "<ul>";
                            echo "<li>Age: " . $row['Age'] . "</li>";
                            echo "<li>Ville: " . $row['Ville'] . "</li>";
                            echo "<li>Email: " . $row['Email'] . "</li>";
                            echo "<li>Portable: " . $row['Portable'] . "</li>";
                            echo"</ul>";
                            echo "Débloquer " . "<input type='checkbox' name= 'librer[]' value=" . $row['Email'] . ">";
                            // echo"Refuser" . "<input type='checkbox' name= 'refuser[]' value=" . $row['Email'] . ">";
                            echo "</pre>";
                            echo("<input type='submit' value='Envoyer'>");
                        }
                        ?>
                    </div>
                </div>   <a href="administrateur.php">Retour</a>
            </div>



        </form>
     
    </body>
</html>
