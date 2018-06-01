<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
问题：选择器不弹出
-->
<html>
    <head>
        <script type="text/javascript" src="getEnfant.js"></script> 
        <meta charset="UTF-8">
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
        <form method="post" action="sauveParentSelection.php">
            <div>
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
            <div>
                <h1>
                    Des informations des enfants:
                </h1>
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
    </body>
</html>
