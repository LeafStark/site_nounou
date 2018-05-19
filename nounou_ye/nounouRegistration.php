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
       
        <form method="post" action="getNounouRegistration.php">
Login(Email):<br />
<input type="email" name="email">
<br />
Mot de passe:<br />
<input type="password" name="mot"><br />
Nom:<br>
<input type="text" name="nom">
<br />
Prenom:
<br />
<input type="text" name="prenom">
<br />
Age:
<br />
<input type="text" name="age">
<br />
Ville:<br />
<input type="text" name="ville">
<br />
Portable:<br />
<input type="tel" name="portable">
<br />
Langue:<br/>
<table>
                <tr>
                    <td>
                        <table id='ajouteLangue'>
                            <tr>
                                <td>
                                    <input type="text" name="Langue" placeholder="Langue" required="true">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" onclick="addText()" value="Ajouter">
                        <input type="button" onclick="deleteText()" value="Supprimer">
                    </td>
                </tr>
            </table>
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
