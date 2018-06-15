<!doctype html>
<html>

    <head>
        <title>Bar Chart</title>
        <script src="Chart.bundle.js"></script>

        <style>
            canvas {
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="carousel.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        require_once 'navbar.html';
        require_once 'pdoConnexion.php';
        $jan = $feb = $mar = $apr = $may = $june = $july = $aug = $sep = $oct = $nov = $dec = 0;
        $requet = "SELECT * FROM `commande`,`disponibilite` WHERE `disponibilite`.`email_nounou`=`commande`.`Email_N`";
        $res = $dbh->query($requet);
        while ($t = $res->fetch()) {
            if (intval(str_replace("-", "", $t['date_debut'])) >= 20180101 and intval(str_replace("-", "", $t['date_fin'])) < 20180201) {
                $jan += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180201 and intval(str_replace("-", "", $t['date_debut'])) < 20180301) {
                $feb += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180301 and intval(str_replace("-", "", $t['date_debut'])) < 20180401) {
                $mar += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180401 and intval(str_replace("-", "", $t['date_debut'])) < 20180501) {
                $apr += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180501 and intval(str_replace("-", "", $t['date_debut'])) < 20180601) {
                $may += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180601 and intval(str_replace("-", "", $t['date_debut'])) < 20180701) {
                $june += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180701 and intval(str_replace("-", "", $t['date_debut'])) < 20180801) {
                $july += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180801 and intval(str_replace("-", "", $t['date_debut'])) < 20180901) {
                $aug += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20180901 and intval(str_replace("-", "", $t['date_debut'])) < 20181001) {
                $sep += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20181001 and intval(str_replace("-", "", $t['date_debut'])) < 20181101) {
                $oct += $t['Salaire'];
            } elseif (intval(str_replace("-", "", $t['date_debut'])) >= 20181101 and intval(str_replace("-", "", $t['date_debut'])) < 20181201) {
                $nov += $t['Salaire'];
            } else {
                $dec += $t['Salaire'];
            }
        }
        ?>
        <br />
        <div id="container" style="width: 85%;">
            <canvas id="canvas"></canvas>
        </div>
        <script>
            var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var color = Chart.helpers.color;
            var barChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                        label: "Chiffre d'affaire",
                        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                        borderColor: window.chartColors.red,
                        borderWidth: 1,
                        data: [
<?PHP
echo $jan . "," . $feb . "," . $mar . "," . $apr . "," . $may . "," . $june . "," . $july . "," . $aug . "," . $sep . "," . $oct . "," . $nov . "," . $dec;
?>]
                    }]

            };

            window.onload = function () {
                var ctx = document.getElementById('canvas').getContext('2d');
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: "Chiffre d'affaire du site"
                        }
                    }
                });

            };


        </script>
    </body>

</html>
