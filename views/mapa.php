<?php
/*

    Data de início:28/09
    Responsável: William Tristão de Paula
    Ultima modificação:28/09
    objetivo: mapa de localização

*/

  /*resgatanado lat e long do link do site*/
  $latitude = $_GET['lat'];
  $long = $_GET['long'];

 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Uma de nossas localizações</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $latitude ?>, lng: <?php echo $long ?>},/*Onde o mapa ira abrir*/
          zoom: 15
        });

        var marker = new google.maps.Marker({
          position: {lat: <?php echo $latitude ?>, lng: <?php echo $long ?>},/*onde será feita a marcação do mapa*/
          map: map,
          title: 'Uma das nossas empresas',
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8wUZ0rk63eo0UuRxtQnWKL7cWRAgdIrw&callback=initMap"
    async defer></script>
  </body>
</html>
