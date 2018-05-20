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
        <script src="getEnfant.js"></script>
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
        <form method="post" action="getEnfant.php">
            <h2>Ajoute enfant(s)</h2>
            <table>
                <tr>
                    <td>
                        <table id='ajouteEnfant'>
                            <tr>
                                <td id="td1">
                                    <input type="text" name="prenomEnfant" placeholder="Préom d'enfant" required="true">
                                </td>
                                <td id="td2">
                                    <input type="date" name="dateNaissance" placeholder="Date de naissance" required="true">
                                </td>
                                <td id="td3">
                                    <input type="text" name="restriction" placeholder="Restriction Alimentaire" required="true">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" onclick="addText()" value="Ajouter">
                        <input type="button" onclick="deleteText()" value="Supprimer">
                        <button>Confirmer</button>
                    </td>
                </tr>
            </table>
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
