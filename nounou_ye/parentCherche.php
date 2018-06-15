<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
问题：选择器不弹出
-->
<?php
require_once 'navbar.html';
?>
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
        <title>Votre cherche</title>

        <link rel="stylesheet" type="text/css" href="themes/ui-lightness/jquery.ui.all.css"/>  
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>  
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>  
        <script type="text/javascript" src="JS/jquery.ui.datepicker.js"></script>  
        <script type="text/javascript">

            $("#dateDebut").datepicker({
                showOn: "button",
                buttonImage: "Images/calendar.gif",
                buttonImageOnly: true
            });


            $("#dateFin").datepicker({
                showOn: "button",
                buttonImage: "Images/calendar.gif",
                buttonImageOnly: true
            });

        </script> 
        <style>  
            *{ font-size:12px; }  
            body{ padding : 30px; }  
            #datepicker{ margin:0; height:13px; }  
        </style>  
    </head>
    <body>
        <br/>
        
        <form method="post" action="sauveParentSelection.php" class="form-horizontal" role="form">
            <div class="container marketing" style="margin: 0 auto;width:500px">
            <div class="form-group">
                <h1>
                    Je cherche un nounou:
                </h1></br>
                <p><input type="checkbox" name="nounou_type" value="ponctuelle">Garde ponctuelle</p>
                <p><input type="checkbox" name="nounou_type" value="reguliere">Garde d’enfant régulière</p>
                <p><input type="checkbox" name="nounou_type" value="langues">Garde d'enfant en langues étrangères</p>
            </div>
            <div>
                <h1>
                    Le date du temps je cherche： 
                </h1>
                <p>Date début:<input type='date' name="dateDebutN"/></p>
                <p>Date fin:<input type='date' name="dateFinN"/></p>
            </div>
            <div>
                <h1>
                    L'heure je précise:
                </h1>
                <p>Heure début:<input type='time' name="heureDebutN"/></p>
                <p>Heure fin:<input type='time' name="heureFinN"/></p>
            </div>
            <p> Définir une disponibilité simple:<br />
            <select name="jour">
                <option value="travailler">Tous les jours travaillés</option>
                <option value="tous">Tous les jours</option>
               <optgroup label="tous les lundis, … dimanche">
                   <option value=0>Tous les lundis</option>
                   <option value=1>Tous les mardis</option>
                   <option value=2>Tous les mecredis</option>
                   <option value=3>Tous les jeudis</option>
                   <option value=4>Tous les vendredis</option>
                   <option  value=5>Tous les samedis</option>
                   <option value=6>Tous les dimanches</option>
            </select>
        </p>
            <div>
                <p>
                    Des informations des enfants:
                </p>
                <select name="enfants">
                    <option value="1">Un enfant</option>
                    <option value="2">Deux enfants</option>
                    <option value="3">Trois enfants</option>
                    <option value="4">Quart enfants</option>
                    <option value="5">Cinq enfants</option>
                </select></br></br>
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
</div>
    </body>
</html>
