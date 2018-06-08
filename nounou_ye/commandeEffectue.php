<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
    </head>
    <body>
        <?php
        session_start();
        require_once 'pdoConnexion.php';
        require_once 'navbar.html';
        $email = $_SESSION['email'];
        //echo $email;
        //$requetCommande = "select * from `nounou`";
        $requetCommande = "SELECT n.`Nom`, n.`Prenom`, n.`Ville`, n.`Email`, n.`Portable`,n.`Evaluation`,c.`Duree`, c.`Salaire`,c.`Status` FROM `nounou` AS n, `commande` AS c WHERE c.Email_P = '$email'AND c.Email_N=n.`Email`";
        $resultatCommande = $dbh->query($requetCommande);
        $rowCommande = $resultatCommande->fetch();
        //echo var_dump($rowCommande);
        //echo $rowCommande['Email'];
        if ($rowCommande != null) { 
            echo("<br>");
            foreach ($rowCommande as $key => $value) {
                if (!is_integer($key) && $key != "Status") {
                  
                    echo("<div>");
                    echo("<ul>");
                    echo("<li>$key : $value</li>");
                    echo("</ul>");
                    echo("</div>");

                    continue;
                }
            }
            //var_dump($rowCommande['Status']);
            if ($rowCommande['Status'] == 0) {
                echo <<<STO
      <form method="post" action="evaluer.php">
            <input type="radio" name="evaluation" value="1"> 1 
           <input type="radio" name="evaluation" value="2"> 2
           <input type="radio" name="evaluation" value="3"> 3
           <input type="radio" name="evaluation" value="4"> 4
           <input type="radio" name="evaluation" value="5"> 5
STO;

                $e = $rowCommande['Email'];
                echo("<input type='hidden' name='emailN' value=$e>");
                echo(" <input type=\"submit\" value=\"Evaluer\">");
            } else {
                echo("Cette commande a été évaluée");
            }
        } else {
            echo '<br>';
            echo("Vide!<br/>");
            echo("Cliquer le lien \"Modifier la cherche\" pour le chercher<br />");
            echo "<a href=\"parentCherche.php\">Modifier la cherche</a>";
        }
        ?>

    </form>
</body>

</html>
