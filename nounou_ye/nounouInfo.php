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
        <meta charset="UTF-8">
        <title>Information de Nounoun</title>
    </head>
    <body>
        <?php
       require_once 'pdoConnexion.php';
       require_once 'navbar.html';
       $requetInfo = "SELECT n.* FROM `nounou` AS n,`compte` AS c WHERE c.login=n.Email AND c.status=2;";
        $result = $dbh->query($requetInfo);
       
      //print_r($rows);
       echo(" <br />"
               . "<div class=\"container marketing\">");
        
       echo("<div class='panel panel-default'>"
            . "<div class='panel-heading'><h3 class = 'panel-title'>Les infos de nounous validés sont:</h3></div>");
       $find=0;
            while($rows = $result->fetch()) {
               echo"<div class=\"card  \">";
                foreach ($rows as $key => $value) {

                    if (!is_integer($key)) {
                        
                        
                        echo(" <ul class=\"list-group\">");
                        echo $key;
                        echo("<li class=\"list-group-item\">$value</li>");
                        echo("</ul>");
                        
                        /* echo("<div>");
                          echo("<ul class='list-unstyled'>");
                          echo("<li>$key : $value</li>");
                          echo("</ul>");
                          echo("</div>"); */
                        $find=1;
                        
                    }
                }
                echo"</div><br /><br/>";
            } if(!$find){
                echo("Il n'y a pas de nounou validé.");
            }
            echo("</div>");
            echo("</div>");
        ?>
    </body>
</html>
