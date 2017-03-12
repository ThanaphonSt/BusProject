@extends('app')
@section('brand')
ตำแหน่งรถปัจจุบัน
@endsection
    <title>PHO TONG in Phuket</title>
 
      <style>

      #map {
        height: 80%;
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
      <script type="text/javascript">
            $('.dropdown-button').dropdown('open');
      </script>
    <script>

      // In the following example, markers appear when the user clicks on the map.
      // The markers are stored in an array.
      // The user can then click an option to hide, show or delete the markers.
      var map;
      var markers = [];
      var iconBase = 'https://nwrsturgeonrefinery.com/assets/themes/nwr/img/bus-icon-dark.png';
      // var latitude;
      // var longitude;
      var results;
      // var kuyy;
        $.ajax({url: "http://139.59.250.117/api/v2/givepos", success: function(result){
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

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
          addMarker(event.latLng);
        });

        // Adds a marker at the center of the map.
        // addMarker({lat:{{$position->position_latitude}}, lng:{{$position->position_longitude}}});
        // addMarker(results);
      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          icon: iconBase,
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
        var i = 0;
        while (i < 5) {
        console.log('ok'+i);
        i++;
    }
    setInterval(deleteMarkers, 5000);
      }

      // Deletes all markers in the array by removing references to them.
      var latitude;
      var longitude;
      // var results;
      

      function deleteMarkers() {
        $.ajax({url: "http://139.59.250.117/api/v2/givepos", success: function(result){
            console.log(result);
            latitude = result.lat;
            longitude = result.lon;
            results = result;
        }});
        kuyy = {lat: Number(latitude), lng: Number(longitude)};
        clearMarkers();
        addMarker({lat: Number(latitude), lng: Number(longitude)});
        // console.log({lat:{{$position->position_latitude}}, lng:{{$position->position_longitude}}});
        console.log(kuyy);
        // console.log(haightAshbury);
        // markers = [];
      }
      showMarkers();
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

  @endsection
