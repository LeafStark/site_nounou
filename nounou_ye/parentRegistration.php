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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="getenant.js"></script>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   <script src="popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <link href="signin.css" rel="stylesheet">
    </head>
    <body>
        <?php require_once 'navbar.html';?>
        <form class='form-signin' method="post" action="getParentRegistration.php">
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
                 <textarea  name="informationGenerale" placeholder="Information Générale" required="true" rows="5" cols="30"></textarea>
             </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 120px">S'inscrire</button>
        </form>
       
    </body>
</html>
