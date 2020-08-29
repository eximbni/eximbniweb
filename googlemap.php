
 <?php

  include('header.php');
  // include('sidebar.php');
?>
  <div id="map1"></div>
<?php
  include('footer.php');
?>



	<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 3,
          center: {lat: -28.024, lng: 140.887}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 11.059821, lng: 78.387451},
        {lat:17.123184, lng: 79.208824},
        {lat:23.473324, lng: 77.947998},
        {lat: 29.238478, lng: 76.431885},
        {lat: 21.295132, lng: 81.828232},
        {lat: 29.065773, lng: 76.040497},
        {lat: 25.794033, lng: 78.116531},
        {lat: 19.601194, lng: 75.552979},
        {lat: 23.745127, lng: 91.746826},
        {lat: 17.874857, lng: 78.100815},
        {lat: -37.759859, lng: 145.128708},
        {lat: -37.765015, lng: 145.133858},
        {lat: -37.770104, lng: 145.143299},
        {lat: -37.773700, lng: 145.145187},
        {lat: -37.774785, lng: 145.137978},
        {lat: -37.819616, lng: 144.968119},
        {lat: -38.330766, lng: 144.695692},
        {lat: -39.927193, lng: 175.053218},
        {lat: -41.330162, lng: 174.865694},
        {lat: -42.734358, lng: 147.439506},
        {lat: -42.734358, lng: 147.501315},
        {lat: -42.735258, lng: 147.438000},
        {lat: -43.999792, lng: 170.463352}
      ]
    </script>
    <!-- Replace following script src -->
   <!--  <script src="/maps/documentation/javascript/examples/markerclusterer/markerclustererplus@4.0.1.min.js">
    </script> -->
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js" ></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPuQadZpFuDF9KOWFrlthnPRdRJb-QlrI&callback=initMap">
    </script>
