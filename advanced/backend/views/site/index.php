<?php

/* @var $this yii\web\View */

$this->title = 'AfterLife';
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 500px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Overview</h3>
    <div id="map"></div>
    <script>
      function initMap() {
      	var center = {lat: 14.6091, lng: 121.0223};
        var mark = {lat: 14.55473, lng: 121.02445};
        var mark2 = {lat: 14.5378, lng: 121.0014};
        var mark3 = {lat: 14.5994, lng: 121.0369};
        var mark4 = {lat: 14.54931518, lng: 121.00542265};
        var mark5 = {lat: 14.57540021, lng: 121.06859404};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: center
        });
        var marker = new google.maps.Marker({
          position: mark,
          map: map
        });
        var marker2 = new google.maps.Marker({
          position: mark2,
          map: map
        });
        var marker3 = new google.maps.Marker({
          position: mark3,
          map: map
        });
        var marker4 = new google.maps.Marker({
          position: mark4,
          map: map
        });
        var marker5 = new google.maps.Marker({
          position: mark5,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl0f7o6ZnGyFZMW94MdMWb2QJuv1-6UJM&callback=initMap">
    </script>
  </body>
</html>
