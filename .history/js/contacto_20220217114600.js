//Inspired by a dribbble by Bluroon
//https://dribbble.com/shots/1356864-Contact-Us

//Capture the click event on a location
$("#location-bar a").click(function(event){
    event.preventDefault();
    
    var $this = $(this),
        $li = $this.parent(),
        selectedMap = $this.attr("href"),
        selectedLocation = $this.data('location');
   
    $li.addClass('active').siblings('li').removeClass('active');
  
    //Update #map bkimage with the image from the location
    $('#map').css('background-image', 'url(' + selectedMap + ')');  
    //update tooltip 'address'
    $('.selectedLocation').text(selectedLocation);
  });
  
  //responsive iframe 
  
  // Find all iframes
  // var $iframes = $( "iframe" );
   
  // Find &#x26; save the aspect ratio for all iframes
  // $iframes.each(function () {
  //   $( this ).data( "ratio", this.height / this.width )
  //     // Remove the hardcoded width &#x26; height attributes
  //     .removeAttr( "width" )
  //     .removeAttr( "height" );
  // });
   
  // // Resize the iframes when the window is resized
  // $( window ).resize( function () {
  //   $iframes.each( function() {
  //     // Get the parent container&#x27;s width
  //     var width = $( this ).parent().width();
  //     $( this ).width( width )
  //       .height( width * $( this ).data( "ratio" ) );
  //   });
  // // Resize to fix all iframes on page load.
  // }).resize();
  directionsService = new google.maps.DirectionsService();
  directionsDisplay = new google.maps.DirectionsRenderer();
  
   var lAltitude = 45.476595;
    var lLongitude = -73.874124;
  var GouinPos = new google.maps.LatLng(45.476595,-73.874124);
  
  $( '#btnGouin' ).on('click',function(event) {
   addMarker(GouinPos);
    window.alert(2+2); 
  });
  
  var myApp = angular.module('myApp', ['uiGmapgoogle-maps']);
  
  myApp.factory("Markers", function(){
    var Markers = [
      {
        "id": "0",
        "coords": {
          "latitude": "45.476595",
          "longitude": "-73.874124"
        },
        "window": {
          "title": "Portland, OR"
        }
      },
      {
        "id": "1",
        "coords": {
          "latitude": "20.7903",
          "longitude": "-73.9597"
        },
        "window" : {
          "title": "Manhattan New York, NY"
        }
      }
    ];
    return Markers;
  });
  
  myApp.controller("gMap",function($scope,Markers){
    
    $scope.Gouin = function () {
      $scope.lLongitude = -73.874124;
      $scope.lAltitude = 45.476595;
      map().center;
    }
    
    $scope.map = { 
      center: { latitude: lAltitude, longitude: lLongitude }, 
      zoom: 15 
    };
    $scope.markers = Markers;
  });
  function addmarker(latilongi) {
      var marker = new google.maps.Marker({
          position: latilongi,
          title: 'new marker',
          draggable: true,
          map: map
      });
  
      var infowindow = new google.maps.InfoWindow({
          content: '<div id="infodiv2">infowindow!</div>'
      });
      //map.setZoom(15);
      map.setCenter(marker.getPosition())
      //infowindow.open(map, marker)
  }