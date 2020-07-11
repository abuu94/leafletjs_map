<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	 
	<!-- Start Leafletjs CSS -->
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<!-- End Leafletjs CSS -->
	
	 <!-- Load Esri Leaflet from CDN for geocode 
	 https://cdnjs.cloudflare.com/ajax/libs/esri-leaflet-geocoder/2.3.3/esri-leaflet-geocoder.js
	  <script src="https://unpkg.com/esri-leaflet/dist/esri-leaflet.js"></script>
	 -->
	  <script src="https://unpkg.com/esri-leaflet/dist/esri-leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/esri-leaflet-geocoder/2.3.3/esri-leaflet-geocoder.js"></script>
	
    <title>Hello, world!</title>
	
	<style>
	.container{
		border: 1px solid black;
		  background-color: lightblue;
		  padding-top: 50px;
		  padding-right: 30px;
		  padding-bottom: 50px;
		  padding-left: 80px;
	}
	</style>
  </head>
  <body>
    
	
	
<div class="container">
	<div class="row mx-md-n5">
	  <div class="col-md-8"><div class="p-3 border bg-light"><div id="mapid" style="width: 680px; height: 400px;"></div></div></div>
	  <div class="col-md-3"><div class="p-3 border bg-light"><?php include 'DbConnect.php';?></div></div>
</div>




</div>

<script>

	var mymap = L.map('mapid').setView([51.505, -0.09], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

	//gecode start here
	var searchControl = L.esri.Geocoding.geosearch.addTo(mymap);

	//Add layergroup to searchControl
	var results = L.layerGroup.addTo(mymap);


	searchControl.on('results',function(data){
		result.clearLayers();

			for (var i= data.results.length -1; i>-0;i--){

			results.addLayer(L.marker(data.results[i].latlng));

			}

		}
	)
	//gecode end here
</script>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>