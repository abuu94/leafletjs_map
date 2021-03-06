<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
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
	 <!-- <script src="https://unpkg.com/esri-leaflet/dist/esri-leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/esri-leaflet-geocoder/2.3.3/esri-leaflet-geocoder.js"></script>-->
	
	<link href='dist/leaflet.fullscreen.css' rel='stylesheet' />
  <script src='dist/Leaflet.fullscreen.min.js'></script>
  <style type="text/css">
  	#mapid,#odd{
  border: 2px solid green;
  padding: 10px;
  border-radius: 12px;
  align-content: center;
}
  </style>
	
    <title>Hello, world!</title>
	
	
  </head>
  <body>
    
	<center><h1>Working with map</h1></center>
	<div id="odd"style="border: 1px solid black;padding:20px;margin-left:10px; ">
			<div id="mapid" style="width: 1300px; height: 600px;padding:20px;"></div> 
			    		
	</div>
	

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
<script>
jQuery(document).ready(function() {

var mymap = L.map('mapid',{
    fullscreenControl: {
        pseudoFullscreen: false
    }
  }).setView([-6.09994425, 39.32094432], 10);//[-6.09994425, 39.32094432] [35.505, -79.09]


  
  
  

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	tileSize: 512,
	fullscreenControl: {
        pseudoFullscreen: false
    },
	zoomOffset: -1
}).addTo(mymap);




//Start loading data from data.php and generate markers
$.ajax({
    type: "POST",
    url: "data_test.php",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    //on success loading data create maker and add to the map
    success: function (data) {
        for (var key in data){
            if (data.hasOwnProperty(key)){
				L.marker([data[key].latitude, data[key].longitude]).bindPopup(data[key].name).addTo(mymap);
            }
        }
    },
    //on error log error
    error: function (erro) {
        console.log(erro)
    }
});
//End loading data
		
});


</script>
  </body>
</html>
