<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   <script src="popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php require_once 'navbar.html';?>
        <br/><br/><br/>
        <div align="center">
            <form method="post" action="sauveNounouSelection.php"enctype="multipart/form-data">
             <h2>Quels types de garde d'enfant souhaitez vous proposer ?</h2>
                <br />
                <input type="radio" name="type_garde" value="ponctuelle">Garde ponctuelle
                <input type="radio" name="type_garde" value="reguliere">Garde d’enfant régulière
                <input type="radio" name="type_garde" value="langues">Garde d'enfant en langues étrangères
                <br/><br/>
                <h2>Quelle expérience avez-vous avec les enfants ?</h2>
                <input type="radio" name="experience" value="Pas d'expérience à ce jour, mais prêt à apprendre !">Pas d'expérience à ce jour, mais prêt à apprendre !<br/>
                <input type="radio" name="experience" value="Experience familiale : garde de frères et soeurs, cousins.">Experience familiale : garde de frères et soeurs, cousins.<br/>
                <input type="radio" name="experience" value="Experience de parent : j'ai élevé mes propres enfants.">Experience de parent : j'ai élevé mes propres enfants.<br/>
                <input type="radio" name="experience" value="Experience professionnelle, 1 à 2 ans.">Experience professionnelle, 1 à 2 ans.<br/>
                <input type="radio" name="experience" value="Experience professionnelle, 2 à 5 ans.">Experience professionnelle, 2 à 5 ans.<br />
                <input type="radio" name="experience" value="Experience professionnelle, plus de 5 ans.">Experience professionnelle, plus de 5 ans.<br />
                <input type="radio" name="experience" value="Experience professionnelle, plus de 10 ans.">Experience professionnelle, plus de 10 ans.<br/>
                <br/><br/>
                <h2>Ajouter votre photo:</h2>
                <input type="file" name="photo">
                <br/><br/>
                <h2>Présentation détaillée</h2>
                <p><b>C'est la partie la plus importante :</b> les familles y prêtent beaucoup d'attention. 
                    Présentez-vous de la manière la plus détaillée possible.</p>
                <textarea name="presentation" rows="10" cols="60"placeholder=
                         "Qui êtes vous ?
Quel type de garde cherchez vous ?
Vos qualités de nounou ?
Votre expérience, les jeux et activités que vous proposez aux enfants, etc." ></textarea>
                <br/><br/>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 200px">ENREGISTRER</button>
            </form>   
        </div>
    </body>
</html>
