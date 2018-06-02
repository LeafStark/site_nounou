<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>site_nounou</title>
        <script lang="javascript" type="text/javascript" src="addLanguage.js"></script>
        <script lang="javascript" type="text/javascript" src="deleteLanguage.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">    
        <link href="signin.css" rel="stylesheet">
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
   <script src="popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">JoJo_Stark</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="acceuil.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html">Connexion</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inscription</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="parentRegistration.php">Parent</a>
                            <a class="dropdown-item" href="nounouRegistration.php">Nounou</a>

                        </div>
                    </li>

                </ul>

            </div>
        </nav>

        <form class="form-signin" method="post" action="getNounouRegistration.php" >
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
            <br /><br />
            <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 120px">S'inscrire</button>
        </form>
    </body>
</html>
