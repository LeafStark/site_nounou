<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
       
    </head>
    <body>
        <br /><br/>
        <?php
        require_once 'showphoto.php';
        require_once 'pdoConnexion.php';
        require_once 'navbar.html';
        session_start();
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $requet = "SELECT * FROM `nounou` where `Email`='$email';";
            $res = $dbh->query($requet);
            $resultat = $res->fetch();
            $nom = $resultat['Nom'];
            $prenom = $resultat['Prenom'];
            $ville = $resultat['Ville'];
            $experience = $resultat['Experience'];
            $presentation=$resultat['Presentation'];
        }
        ?>
        <br />
        <div class="container marketing">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Nounou</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#"><?php echo $prenom . " " . $nom ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $ville ?></div>
                    <p class="card-text mb-auto"><?php echo $experience ?></p>
                   <p class="card-text mb-auto"><?php echo $presentation ?></p>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" src="<?php addressPhoto($email);?>" alt="Card image cap">
            </div>
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="image/dis.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Disponibilités</h2>
                    <p><a class="btn btn-secondary" href="disponibilitesNounou.html" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="image/information.png" alt="Generic placeholder image" width="140" height="140">
                    <h2>Informations</h2>
                    <p><a class="btn btn-secondary" href="nounoucherche.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="image/planning.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Planning</h2>
                    <p><a class="btn btn-secondary" href="planning.php" role="button">Aller &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
</div>



    </body>
</html>
