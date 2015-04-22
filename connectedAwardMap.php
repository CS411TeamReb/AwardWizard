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
   
    
    var center = new google.maps.LatLng(39.5, -98.35);
    var NYTheaterDistrict = new google.maps.LatLng(40.7566, -73.9863);
    var losAngeles = new google.maps.LatLng(34.0489, -118.0483);
    var england = new google.maps.LatLng(51.1295, 1.3089);

	/**
 	* The CenterControl adds a control to the map that recenters the map on the center.
 	* This constructor takes the control DIV as an argument.
	 * @constructor
 	*/
	function CenterControl(controlDiv, map) {

  		// Set CSS for the control border
  		var controlUI = document.createElement('div');
  		controlUI.style.backgroundColor = '#fff';
  		controlUI.style.border = '2px solid #fff';
  		controlUI.style.borderRadius = '3px';
  		controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
  		controlUI.style.cursor = 'pointer';
  		controlUI.style.marginBottom = '70px';
  		controlUI.style.textAlign = 'center';
  		controlUI.title = 'Click to recenter the map';
  		controlDiv.appendChild(controlUI);

  		// Set CSS for the control interior
  		var controlText = document.createElement('div');
  		controlText.style.color = 'rgb(25,25,25)';
  		controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
  		controlText.style.fontSize = '16px';
  		controlText.style.lineHeight = '38px';
  		controlText.style.paddingLeft = '5px';
  		controlText.style.paddingRight = '5px';
  		controlText.innerHTML = 'Center Map';
  		controlUI.appendChild(controlText);

  		// Setup the click event listeners: simply set the map to
  		// Chicago
  		google.maps.event.addDomListener(controlUI, 'click', function() {
    			map.setCenter(center);
    			map.setZoom(4);
  		});

	}
	
	
	function NYControl(controlDiv, map) {

  		// Set CSS for the control border
  		var controlUI = document.createElement('div');
  		controlUI.style.backgroundColor = '#fff';
  		controlUI.style.border = '2px solid #fff';
  		controlUI.style.borderRadius = '3px';
  		controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
  		controlUI.style.cursor = 'pointer';
  		controlUI.style.marginBottom = '70px';
  		controlUI.style.marginLeft = '5px';
  		controlUI.style.textAlign = 'center';
  		controlUI.title = 'Click to center map on NY Theater District';
  		controlDiv.appendChild(controlUI);

  		// Set CSS for the control interior
  		var controlText = document.createElement('div');
  		controlText.style.color = 'rgb(25,25,25)';
  		controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
  		controlText.style.fontSize = '16px';
  		controlText.style.lineHeight = '38px';
  		controlText.style.paddingLeft = '5px';
  		controlText.style.paddingRight = '5px';
  		controlText.innerHTML = 'NY Theater District';
  		controlUI.appendChild(controlText);

  		// Setup the click event listeners: simply set the map to
  		// Chicago
  		google.maps.event.addDomListener(controlUI, 'click', function() {
    			map.setCenter(NYTheaterDistrict);
    			map.setZoom(13);
  		});

	}
	
	
	function LAControl(controlDiv, map) {

  		// Set CSS for the control border
  		var controlUI = document.createElement('div');
  		controlUI.style.backgroundColor = '#fff';
  		controlUI.style.border = '2px solid #fff';
  		controlUI.style.borderRadius = '3px';
  		controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
  		controlUI.style.cursor = 'pointer';
  		controlUI.style.marginBottom = '70px';
  		controlUI.style.marginLeft = '5px';
  		controlUI.style.textAlign = 'center';
  		controlUI.title = 'Click to center map on LA';
  		controlDiv.appendChild(controlUI);

  		// Set CSS for the control interior
  		var controlText = document.createElement('div');
  		controlText.style.color = 'rgb(25,25,25)';
  		controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
  		controlText.style.fontSize = '16px';
  		controlText.style.lineHeight = '38px';
  		controlText.style.paddingLeft = '5px';
  		controlText.style.paddingRight = '5px';
  		controlText.innerHTML = 'Los Angeles';
  		controlUI.appendChild(controlText);

  		// Setup the click event listeners: simply set the map to
  		// Chicago
  		google.maps.event.addDomListener(controlUI, 'click', function() {
    			map.setCenter(losAngeles);
    			map.setZoom(10);
  		});

	}
	
	function EnglandControl(controlDiv, map) {

  		// Set CSS for the control border
  		var controlUI = document.createElement('div');
  		controlUI.style.backgroundColor = '#fff';
  		controlUI.style.border = '2px solid #fff';
  		controlUI.style.borderRadius = '3px';
  		controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
  		controlUI.style.cursor = 'pointer';
  		controlUI.style.marginBottom = '70px';
  		controlUI.style.marginLeft = '5px';
  		controlUI.style.textAlign = 'center';
  		controlUI.title = 'Click to center map on England';
  		controlDiv.appendChild(controlUI);

  		// Set CSS for the control interior
  		var controlText = document.createElement('div');
  		controlText.style.color = 'rgb(25,25,25)';
  		controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
  		controlText.style.fontSize = '16px';
  		controlText.style.lineHeight = '38px';
  		controlText.style.paddingLeft = '5px';
  		controlText.style.paddingRight = '5px';
  		controlText.innerHTML = 'England';
  		controlUI.appendChild(controlText);

  		// Setup the click event listeners: simply set the map to
  		// Chicago
  		google.maps.event.addDomListener(controlUI, 'click', function() {
    			map.setCenter(england);
    			map.setZoom(7);
  		});

	}
    
    
      function initialize() {
        var mapOptions = {
          center: { lat: 39.5, lng: -98.35},
          zoom: 4
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions); 
            
            
      	// Create the DIV to hold the control and
  	// call the CenterControl() constructor passing
  	// in this DIV.
  	var centerControlDiv = document.createElement('div');
  	var centerControl = new CenterControl(centerControlDiv, map);

 	centerControlDiv.index = 1;
  	map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(centerControlDiv);
  	
  	var nyControlDiv = document.createElement('div2');
  	var nyControl = new NYControl(nyControlDiv, map);

 	nyControlDiv.index = 1;
  	map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(nyControlDiv);
  	
  	var laControlDiv = document.createElement('div3');
  	var laControl = new LAControl(laControlDiv, map);

 	nyControlDiv.index = 1;
  	map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(laControlDiv);
  	
  	var englandControlDiv = document.createElement('div4');
  	var englandControl = new EnglandControl(englandControlDiv, map);

 	nyControlDiv.index = 1;
  	map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(englandControlDiv);
					
	$.ajax({
			url: "php/getLocations.php",
			type: "get",
			cache: false,
			success: function(filmedIn) {
			    
				filmedInData = JSON.parse(filmedIn);
				
				var markerArray = [];
				var infoWindowArray = [];
				
				var awardNameArray = [];
				var awardArray = [[]];
				
				for (var i = 0; i < filmedInData.length; i++) {
				
				var data = filmedInData[i];
				
				var currentIndex = awardNameArray.indexOf(data.AwardName);
				if(currentIndex == -1){
					awardNameArray.push(data.AwardName);
					awardArray.push(new Array);
					currentIndex = awardNameArray.indexOf(data.AwardName);	
				}
				awardArray[currentIndex].push(new google.maps.LatLng(data.Latitude, data.Longitude));
  			      				
      				var personname;
      				console.log(data.PersonName);
      				
      				if(data.PersonName != null)
      					personname = 'Person: ' + data.PersonName + '<br>';
      				else
      					personname = '';
      				
      				var contentString = 'Show Name & Year: ' + data.ShowName + ' ' + data.YearGiven + '<br>' + 'Award Name: ' + 			 	
      				data.AwardName + '<br>' + personname + data.NominatedWon + '<br>' + 'Work Name: ' + data.TitleName + '<br>' 
      				+ "<img height='130' src=" + data.URL + ">" ;
 				var infowindow = new google.maps.InfoWindow({
      					content: contentString
  				});
  				
  				infoWindowArray.push(infowindow);
  				
  				var pinColor;
  				if(data.NominatedWon == 'Won')
  					pinColor = "FFFF66";
  				else
  					pinColor = "989896";
  				var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + 			pinColor,
       				new google.maps.Size(21, 34),
        			new google.maps.Point(0,0),
        			new google.maps.Point(10, 34));
        	
        			
   				var marker = new google.maps.Marker({
        				position: new google.maps.LatLng (data.Latitude, data.Longitude),
        				map: map,
        				title: data.TitleName,
        				icon: pinImage,
    				});
    					 
    				markerArray.push(marker);
 				
 				google.maps.event.addListener(markerArray[i], 'click', (function(i) {
        				return function() {
          				infoWindowArray[i].open(map,markerArray[i]);
        				}
      				})(i));
    					
      				}
      				alert("Welcome to the Connected Awards Map! \nEach pin on this map represents a movie, tv show, or stage, and is placed on the location where the work was filmed. The yellow pins mean that the work won an award, while the grey pins means that the work was nominated, but did not win. All the works which were nominated for the same awards are connected by lines so that it is easier to see the relationship between the geographic locations of the works nominated for the same award. Click on a marker to view more information about the work and the award for which it was nominated or won.");
      				
      				function getRandomColor() {
    					var letters = '0123456789ABCDEF'.split('');
    					var color = '#';
    					for (var i = 0; i < 6; i++ ) {
        					color += letters[Math.floor(Math.random() * 16)];
    					}
    					return color;
				}
      				
      				for(var i = 0; i < awardNameArray.length; i++){
      					var the_polygon = new google.maps.Polygon({
    						paths: awardArray[i],
    						strokeColor: getRandomColor(),
    						strokeOpacity: 0.8,
    						strokeWeight: 1.3,
    						fillOpacity: 0.00
  					});

					the_polygon.setMap(map);
      				}
				
			}
		});	
 	
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