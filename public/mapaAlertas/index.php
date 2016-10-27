<!DOCTYPE html>
<html>
 <head>
  <title>Leaflet basic example</title>
  <link rel="stylesheet" href="css/leaflet.css" />
  <script src="js/leaflet.js"></script>
 </head>
 <body>
  <div id="map" style="width: 600px; height: 400px"></div>
  <script>
   var map = L.map('map').setView([51.505, -0.09], 13);
   L.tileLayer( 'https://' + '{s}.tiles.mapbox.com/' + 'v3/{id}/{z}/{x}/{y}.png', {
   maxZoom: 18,
   attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
   '<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
   'Imagery © <a href="http://mapbox.com">Mapbox</a>',
   id: 'examples.map-i875mjb7'
   }).addTo(map);
  </script>
 </body>
</html>