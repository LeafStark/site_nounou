<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>site_nounou</title>
        <script lang="javascript" type="text/javascript" src="addLanguage.js"></script>
        <script lang="javascript" type="text/javascript" src="deleteLanguage.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">        
    </head>
    <body>
     
        <form method="post" action="sauveParentSelection.php" >
Login(Email):<br />
<input type="email" name="email" required="true">
<br />
Mot de passe:<br />
<input type="password" name="mot" required="true"><br />
Nom:<br>
<input type="text" name="nom" required="true">
<br />
Prenom:
<br />
<input type="text" name="prenom" required="true">
<br />
Age:
<br />
<input type="number" name="age">
<br />
Ville:<br />
<input type="text" name="ville" required="true">
<br />
Portable:<br />
<input type="tel" name="portable" required="true    ">
<br />
Langue:<br/>
<input type='text' name='langue' required="true">
<br />
<input type="submit" value="S'inscrire">
        </form>
    </body>
</html>
