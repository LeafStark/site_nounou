<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php
  require_once 'pdoConnexion.php';
  
  $requete = "select * from enfant where parent="
 
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form method="post" action="postEnfant.php">
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
            </table>
            <input type="submit" value="Confirmer">
        </form>
        
    </body>
</html>
