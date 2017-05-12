@extends('app')
@section('brand')
เส้นทางเดินรถแอร์พอร์ทบัส
@endsection
    <title>AirportBus in Phuket</title>

    <style>

      #map {
        height: 100%;
        width: 100%;
      }

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
@section('content')
    <div id="map"></div>
        <script>
        var markers = [];
        var map;
              function initMap(){
                    map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: {lat: 7.883135, lng: 98.387156},
                    mapTypeId: 'roadmap'
                });
                        var infoWindow = new google.maps.InfoWindow({map: map});
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('คุณอยู่ตรงนี้');
                    map.setCenter(pos);
                  }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                  });
                } else {

                  handleLocationError(false, infoWindow, map.getCenter());
                }               

                  @foreach($airportbusroute as $airportbusroutes)
                  var marker{{$airportbusroutes->busstop_id}} = new google.maps.Marker({
                    position: {lat: {{$airportbusroutes->busstop_latitude}}, lng: {{$airportbusroutes->busstop_longitude}}},
                    map: map
                  });

                  var infowindow{{$airportbusroutes->busstop_id}} = new google.maps.InfoWindow({
                    content: '{{$airportbusroutes->busstop_name}}'
                  });
                  marker{{$airportbusroutes->busstop_id}}.addListener('click', function() {
                  infowindow{{$airportbusroutes->busstop_id}}.open(map, marker{{$airportbusroutes->busstop_id}});
                  });
                  @endforeach

                  var paths = [
                  @foreach($roadAirport as $roadAirports)
                  {lat: {{$roadAirports->latitude}}, lng: {{$roadAirports->longitude}}},
                  @endforeach
                  ]
                  
                  var airport = new google.maps.Polyline({
                      path: paths,    
                      geodesic: true,
                      strokeColor: '#FF0000',
                      strokeOpacity: 5.0,
                      strokeWeight: 5
                  });
                  airport.setMap(map);
              }

              // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          // icon: iconBase,
          icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: 'red',
                fillOpacity: 1,
                strokeColor: 'white',
                strokeWeight: 3
            },
          map: map
        });
        markers.push(marker);
      }

      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setMapOnAll(null);
      }

      // Shows any markers currently in the array.
      function showMarkers() {
        setMapOnAll(map);

      setInterval(deleteMarkers, 5000);
      }

      // Deletes all markers in the array by removing references to them.
      var latitude;
      var longitude;
      // var results;
      var no1 = [];
      var no2 = [];

      function deleteMarkers() {
        $.ajax({url: "http://128.199.195.185/api/v2/givepos3air", success: function(result){
            $.each(result, function(index, result) {
              // console.log(result);
              no1.push({lat: Number(result.lat), lng: Number(result.lon)});
            });
            // console.log(result);
            latitude = result.lat;
            longitude = result.lon;
            // results = result;
        }});
        result = {lat: Number(latitude), lng: Number(longitude)};
        clearMarkers();
        // addMarker({lat: Number(latitude), lng: Number(longitude)});
        // addMarker({lat: 7.8936129, lng: 98.3531696});
        for (var i in no1) {
          // addMarker(no1[i]);
         var markerPic = new google.maps.Marker({
         position: new google.maps.LatLng(no1[i].lat, no1[i].lng),
         icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: '#D1BB00',
                fillOpacity: 1,
                strokeColor: 'white',
                strokeWeight: 3
            },
         map: map
    });
    markers.push(markerPic);

    google.maps.event.addListener(markerPic, 'click', (function(markerPic, i) {
         return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, markerPic);
         }
    })(markerPic, i));
        }

        console.log(no1[1]);
        no1 = [];
      }
showMarkers();
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
@endsection