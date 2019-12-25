<?php
/* @var $this yii\web\View */
$this->title = 'Peta';
use yii\helpers\Html;
use app\assets\AppAsset;
?>

<div class="site-Peta">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CONTOH API GOOGLE MAPS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5X7w0X16t-WNf5qqUIxeC2rID8Hys4Zg&libraries=places&sensor=false"></script> -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5X7w0X16t-WNf5qqUIxeC2rID8Hys4Zg&libraries=places" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script> -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script src="geocomplete.js"></script> -->
	<script src="jquery.geocomplete.js"></script>
</head>
<body>
	<div class="container-fluid" style="background-color: #2ecc71; color:white; height:100px; border-radius:10px">
		<h1 align="center">PETA PERSEBARAN BENCANA</h1>
	</div>
		<script>
			var inilat, inilong;
			// $('input').geocomplete({
  	// 			map: "#peta"
			// });
			$(function () { 
    			$('input').geocomplete().bind('geocode:result', function(e, result){
    				console.log(result);
    				inilat = (result.geometry.viewport.ma.j +result.geometry.viewport.ma.l)/2;
    				inilong = (result.geometry.viewport.fa.j +result.geometry.viewport.fa.l)/2;
    				console.log(inilat);
    				console.log(inilong);
    			});

			});
		</script>
		<div id="peta-rute" style="width: 100%; height: 500px; margin: 10px auto;">		
		</div>
		

		<script>
			
			var directionsDisplay = new google.maps.DirectionsRenderer();
			var directionsService = new google.maps.DirectionsService();

			var peta; 
			var point = [<?php foreach($data as $d) { echo json_encode(['latitude' => $d->latitude, 'longitude' => $d->longitude]).','; } ?>];
			var poin0 = new google.maps.LatLng(-7.552006, 110.829769);
			//var poin1 = new google.maps.LatLng(inilat, inilong);
			//var poin2 = new google.maps.LatLng(-7.552006, 110.829769);

			var mapOptions = {
				zoom: 14,
				center: poin0
			};

			peta = new google.maps.Map(document.getElementById('peta-rute'), mapOptions);
			
			for (poi of point) {
				var marker = new google.maps.Marker({
				  position: new google.maps.LatLng(poi.latitude, poi.longitude),
				  map: peta,
				  title: 'WW'
				});
			}
			
			directionsDisplay.setMap(peta);

			function calculateRoute(){
				var poin1 = new google.maps.LatLng(inilat, inilong);
				console.log(inilat);
				var request = {
					origin: poin1,
					destination: poin2,
					travelMode: 'DRIVING'
				};

				directionsService.route(request, function(result, status){
					if(status == "OK"){
						directionsDisplay.setDirections(result);
					}

				});				
			}

			document.getElementById('dapat').onclick = function(){
				calculateRoute();
			};

		</script>
	</div>
</body>
</html>
</div>