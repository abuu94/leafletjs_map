<?php include("header.php");?>

    <center><h1>Working with map</h1></center>

    <div id="map" style="width: 1350px; height: 600px;"></div>
    <br/><br/>
    <div id="map2" style="width: 1350px; height: 600px;"></div>
    <br/><br/>
    <div id="mapEvent" style="width: 1350px; height: 600px;"></div>
    <script type="text/javascript">
    
// zanzibar town long:39.195339 lat:-6.158160  [39.195339,-6.158160]
   

var map = L.map('map').setView([-6.158160,39.195339], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-6.158160,39.195339]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily zanzibar.')
    .openPopup();


var map2 = L.map('map2').setView([-6.158160,39.195339], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map2);

L.circle([-6.158160,39.195339],500,{
  color:'red',
  fillColor:'#f03',
  fillOpacity:0.5
  }).addTo(map2).bindPopup('This is a Benchmark Point.<br> Zanzibar.');
  

  // L.polygon([
  //   [51.509, -0.08],
  //   [51.503, -0.06],
  //   [51.51, -0.047]
  // ]).addTo(mymap).bindPopup("This is Green Reserve.");

  // var popup = L.popup()
  //   .setLatLng([-6.158160,39.195339])
  //   .setContent("I am a standalone popup.")
  //   .openOn(map);

//   function onMapClick(e) {
//     alert("You clicked the map at " + e.latlng);
// }  0773280835

// map.on('click', onMapClick);

//hapa nimetngeneza  map mbayo ukigusa ramani inaonesha codinates zake sehemu hiyo
var mapEvent = L.map('mapEvent').setView([-6.158160,39.195339], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mapEvent);
// L.marker([-6.158160,39.195339]).addTo(mapEvent)
//     .bindPopup('By function.')
//     .openPopup();

  var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mapEvent);
}

mapEvent.on('click', onMapClick);
    </script>


<?php include("footer.php");?>