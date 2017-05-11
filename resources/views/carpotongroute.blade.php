@extends('app')
@section('brand')
ตำแหน่งรถปัจจุบัน
@endsection
    <title>PHO TONG in Phuket</title>
 
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
      #legend {
        font-family: Arial, sans-serif;
        background: #fff;
        padding: 10px;
        margin: 10px;
        border: 3px solid #000;
      }
      #legend h3 {
        margin-top: 0;
      }
      #legend img {
        vertical-align: middle;
      }
      
    </style>
@section('content')

      <div class="teal darken-4">
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="{{url('/currentbus/1')}}">คันที่1 เมือง-ป่าตอง</a></li>
                <li><a href="{{url('/currentbus/2')}}">คันที่2 เมือง-เกาะแก้ว</a></li>
            </ul>

            <a class="btn dropdown-button" href="#!" data-activates="dropdown2">เลือกรถและสาย<i class="mdi-navigation-arrow-drop-down right material-icons">toc</i></a>
      </div>
    <div id="map"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>

      var map;
      var markers = [];
      var iconBase = 'https://nwrsturgeonrefinery.com/assets/themes/nwr/img/bus-icon-dark.png';

      var results;
        $.ajax({url: "http://128.199.195.185/api/v2/givepos", success: function(result){
            console.log(result);
            latitude = result.lat;
            longitude = result.lon;
            results = result;
        }});

      function initMap() {
        var haightAshbury = {lat: 7.8959116, lng: 98.3676156};

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: haightAshbury,
          mapTypeId: 'terrain'
        });


      }


      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,

          icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: 'green',
                fillOpacity: 1,
                strokeColor: 'white',
                strokeWeight: 3
            },
          map: map
        });
        markers.push(marker);
      }

      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

      function clearMarkers() {
        setMapOnAll(null);
      }

      function showMarkers() {
        setMapOnAll(map);

      setInterval(deleteMarkers, 5000);
      }

      var latitude;
      var longitude;
      var no1 = [];
      var no2 = [];

      function deleteMarkers() {
        $.ajax({url: "http://128.199.195.185/api/v2/givepos", success: function(result){
            $.each(result, function(index, result) {
              no1.push({lat: Number(result.lat), lng: Number(result.lon)});
            });
            latitude = result.lat;
            longitude = result.lon;
        }});
        result = {lat: Number(latitude), lng: Number(longitude)};
        clearMarkers();
        for (var i in no1) {
         var marker = new google.maps.Marker({
         position: new google.maps.LatLng(no1[i].lat, no1[i].lng),
         icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: 'green',
                fillOpacity: 1,
                strokeColor: 'white',
                strokeWeight: 3
            },
         map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, marker);
         }
    })(marker, i));
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
