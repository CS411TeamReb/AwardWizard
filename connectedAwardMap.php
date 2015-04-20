<!DOCTYPE html>
<html>
<head>
	<title>Award Wizard</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="A website dedicated to cool searches of data gathered from award shows" />

	<!-- stylesheets -->
	<link type="text/css" rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	
	<style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0; margin-top: 25px;}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkkePuH9iq4tsr13vpTSxhAlrvEv1zNSs">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: 39.5, lng: -98.35},
          zoom: 4
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions); 
					
		
 	
      }          
      google.maps.event.addDomListener(window, 'load', initialize);
  
 	
    </script>
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Award Wizard</a>
				</div>
				<div class="collapse navbar-collapse" id="mainNav">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="search.php">Search</a></li>
						<li><a href="insert.php">Insert</a></li>
						<li><a href="breakdown.php">Data Breakdown</a></li>
						<li><a href="filmedInMap.php">Map</a></li>
					</ul>
					
					<ul class="nav nav-tabs navbar-right">
  						<li role="presentation"><a href="filmedInMap.php">Filmed Locations</a></li>
  						<li role="presentation" class="active"><a href="connectedAwardMap.php">Connected Awards</a></li>
  						<li role="presentation"><a href="actorOriginMap.php">Actor/Actress Origin</a></li>
					</ul>
				</div>
			</div>
			
			
			
			
		</nav>
	</div>
	<div id="map-canvas"></div>


		<div id="push"></div>
		<!--<footer>
			<p align="center">Made with <i class="fa fa-heart"></i> by Emily Chao, Brianna Ifft, Robin Sturm and Milan Dasgupta.</p>
		</footer>-->
		<!--scripts-->
		<script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
		<script src="bower_components/knockout/dist/knockout.js" type="text/javascript"></script>
		<script src="bower_components/d3/d3.min.js" type="text/javascript"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/app.js" type="text/javascript"></script>
		<script src="js/misc.js" type="text/javascript"></script>
		<script src="bower_components/modernizr/modernizr.js" type="text/javascript"></script>
	</body>
</html>