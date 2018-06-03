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
    <?php require_once 'navbar.html';?>
    <br />
	<div id="container" style="width: 85%;">
		<canvas id="canvas"></canvas>
	</div>
	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels:  ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
			datasets: [{
				label: "Chiffre d'affaire",
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
				]
			}]

		};

		window.onload = function() {
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
