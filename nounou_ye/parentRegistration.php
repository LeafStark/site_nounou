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
        <script lang="javascript" type="text/javascript" src="addText.js"></script>
        <script lang="javascript" type="text/javascript" src="deleteText.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="getenant.js"></script>
    </head>
    <body>
        <form method="post" action="getParentRegistration.php">
            <div class="form-group">
                <input type="text" name="nom" placeholder="Nom de famille" required="true">
            </div>
            <div class="form-group">
                <input type="text" name="ville" placeholder="Ville" required="true">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required="true">
            </div>
            <div class="form-group">
                <input type="password" name="motDePasse" placeholder="Mot de passe" required="true">
            </div>
             <div class="form-group">
                <input type="text"  name="informationGenerale" placeholder="Information Générale" required="true">
             </div>
            <input type="submit" value="S'inscrire">
        </form>
       
        <?php
        // put your code here
        ?>
    </body>
</html>
