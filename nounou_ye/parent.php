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
        <link href="carousel.css" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        require_once 'pdoConnexion.php';
        require_once 'navbar.html';

        $email = $_SESSION['email'];
        $requet = "select * from parents where Email = '$email'";
        $resultats = $dbh->query($requet);

        $requetCherche = "SELECT `type_nounou`, `jour`,`date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `nb_enfant` FROM `parents_cherche` WHERE email = '$email'";
        $resultatCherche = $dbh->query($requetCherche);

        $row = $resultats->fetch();
        $rowCherche = $resultatCherche->fetch();
//$rowCommande = $resultatCommande->fetch();
//print_r($row);
//个人信息
        ?>

        <br />
        <div class="container marketing">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Parent</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#"><?php echo( $row['Nom_F']); ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['Ville'] ?></div>
                    <p class="card-text mb-auto"><?php echo $row['Information'] ?></p>
                    </div>
                </div>
                    <!--                
                    echo("<h1>Page du " . $row['Nom_F'] . "<h1>");
                    echo("<div>");
                    echo "<pre>";
                    echo "<ul>";
                    echo "<li>Ville: " . $row['Ville'] . "</li>";
                    echo "<li>Email: " . $row['Email'] . "</li>";
                    echo "<li>Information: " . $row['Information'] . "</li>";
                    echo"</ul>";
                    //echo "Valider"."<input type='checkbox' name= 'valider[]' value=".$row['Email'].">";
                    // echo"Refuser"."<input type='checkbox' name= 'refuser[]' value=".$row['Email'].">";
                    echo "</pre>";
                    echo("</div>");
                    //print_r($rowCherche);
                    -->
                    <?php
                    //保姆预存信息
                    echo("<h1>Votre nounou cherche est: </h1>");
                    if ($rowCherche != null) {
                        foreach ($rowCherche as $key => $value) {

                            if (!is_integer($key)) {
                                echo("<div>");
                                echo("<ul>");
                                echo("<li>$key : $value</li>");
                                echo("</ul>");
                                echo("</div>");
                                continue;
                            }
                        }
                    } else {
                        echo("Vide!");
                        echo("Cliquer le lien \"Modifier la cherche\" pour le chercher");
                    }
                    ?>

                    <div class="row">
                        <div class="col-lg-4">
                            <img class="rounded-circle" src="image/dis.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Modification</h2>
                            <p><a class="btn btn-secondary" href="parentCherche.php" role="button">Aller &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="rounded-circle" src="image/nounou.png" alt="Generic placeholder image" width="140" height="140">
                            <h2>Nounous</h2>
                            <p><a class="btn btn-secondary" href="nounouBon.php" role="button">Aller &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-4">
                            <img class="rounded-circle" src="image/panier.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h2>Commandes</h2>
                            <p><a class="btn btn-secondary" href="commandeEffectue.php" role="button">Aller &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                    <!--       
                    <div>
                                <a href="parentCherche.php">Modifier la cherche</a>
                            </div>
                            <div>
                                <a href="nounouBon.php">Voir les nounous je cherche</a>
                            </div>
                            <div>
                                <a href='commandeEffectue.php'>Mes commandes</a>
                            </div>
                    -->
                    </body>
                    </html>



