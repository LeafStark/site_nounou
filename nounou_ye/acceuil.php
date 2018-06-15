<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>NouNouPratique</title>

        <!-- Bootstrap core CSS -->
        <link href="carousel.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style> body {
                min-height: 75rem;
                padding-top: 4.5rem;
            }

        </style>
    </head>

    <body>

        <?php require_once 'navbar.html'; ?>

        <main role="main" class="container">
            <div class="jumbotron">
                <center>
                    <h1>Nous sommes NouNouPratique</h1>
                    <p class="lead">Pour la belle vie.</p>
                    <!--<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button"></a>-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="first-slide" src="image/acceuil.png" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1</h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="second-slide" src="image/family.jpg" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1></h1>
                                        <p></p>
                                       <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="third-slide" src="image/family2.jpg" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption text-right">
                                        <h1</h1>
                                        <p></p>
                                        <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </center>
            </div>
        </main>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

    </body>
</html>
