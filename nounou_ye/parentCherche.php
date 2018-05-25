<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Votre cherche</title>

        <link rel="stylesheet" type="text/css" href="themes/ui-lightness/jquery.ui.all.css"/>  
        <script type="text/javascript" src="JS/jquery-1.4.2.min.js"></script>  
        <script type="text/javascript" src="JS/jquery.ui.core.js"></script>  
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
        <form method="post" action="sauveParentSelection.php"/>
        <div>
            <h1>
                Je cherche un nounou:
            </h1></br>
            <p><input type="checkbox" id="nounou_ponctuel">Garde ponctuelle</p>
            <p><input type="checkbox" id="nounou_regulaire">Garde d’enfant régulière</p>
            <p><input type="checkbox" id="nounou_langues">Garde d'enfant en langues étrangères</p>
        </div>
        <div>
            <h1>
                Le date du temps je cherche： 
            </h1>
            <p>Date début:<input type='text' id="dateDebut"/></p>
            <p>Date fin:<input type='text' id="dateFin"/></p>
        </div>
    </body>
</html>
