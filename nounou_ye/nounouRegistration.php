<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>site_nounou</title>
        <script lang="javascript" type="text/javascript" src="addLanguage.js"></script>
        <script lang="javascript" type="text/javascript" src="deleteLanguage.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
       
        <form method="post" action="getNounouRegistration.php" enctype="multipart/form-data">
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
Photo:<br />
<input type="file" name="photo">
<br />
Experience:<br />
<textarea name="experience" row="10" cols="30" ></textarea>
<br />
Presentation:<br />
<textarea name="presentation" row="10" cols="30" ></textarea>
<br/>
<input type="submit" value="S'inscrire">
        </form>
        
    </body>
</html>
