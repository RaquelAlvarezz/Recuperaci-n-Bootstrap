<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloscontacto.css">
    <link rel="icon" type="image/jpg" href="./img/bosquejo.png"/>
    <title>360 grados Arquitectura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
<?php include "header.php"; ?>
    
<main>
<div class="map">
<div id='browser'>
  <div id='browser-bar'>
    <div class='circles'></div>
    <div class='circles'></div>
    <div class='circles'></div>
    <p>Contact Us</p>
    <span class='arrow entypo-resize-full'></span>
  </div>
  <div id='content'>
    <div id='left'>
      <div ng-app="myApp" ng-controller="gMap">
  <ui-gmap-google-map 
    center='map.center' 
    zoom='map.zoom' aria-label="Google map">
    
    <ui-gmap-marker ng-repeat="marker in markers"
      coords="marker.coords" options="marker.options" events="marker.events" idkey="marker.id">
      <ui-gmap-window>
        </div>
            <ul id='location-bar'>
        <li >
          <a href="#" id = 'btnGouin'>Gouin West</a>
        </li>
        <li>
          <a href=#>Other one</a>
        </li>
        </ul>
    </div>
      
      </ui-gmap-window>
    </ui-gmap-marker>
    
  </ui-gmap-google-map>

    <div id='right'>
      <p>Connect</p>
      <div id='social'>
        <a href="https://www.facebook.com/Quality-Cuts-Salon-Coiffure-183650908315210/" target="_blank" class='social'>
          <span class='entypo-facebook'></span>
        </a>
        <a class='social'>
          <span class='entypo-twitter'></span>
        </a>
        <a class='social'>
          <span class='entypo-linkedin'></span>
        </a>
        <a class='social'>
          <span class='entypo-gplus'></span>
        </a>
        <a href="https://www.instagram.com/qualitycuts/?hl=en"class='social'>
          <span class='entypo-instagrem'></span>
        </a>
      </div>
      <p>other way</p>
      <p class='other entypo-phone'>(+972 2) 629 06 32</p>
    </div>

    </main>
    <?php include "footer.php"; ?>
    
    
</body>
</html>