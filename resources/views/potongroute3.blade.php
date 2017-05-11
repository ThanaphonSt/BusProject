@extends('app')
@section('brand')
เส้นทางเดินรถโพถ้องสายที่ 3
@endsection
    <title>PHO TONG in Phuket</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
    </style>
@section('content')  
            <div class="teal darken-4">
                <ul id="dropdown2" class="dropdown-content">
                <li><a href="{{url('/routeofpotong1/1')}}">สาย 1</a></li>
                <li><a href="{{url('/routeofpotong2/2')}}">สาย 2</a></li>
                <li><a href="{{url('/routeofpotong3/3')}}">สาย 3</a></li>
                <li><a href="{{url('/routeofpotong')}}">ดูทุกสาย</a></li>
                </ul>
                <a class="btn dropdown-button" href="#!" data-activates="dropdown2">เลือกสายรถประจำทาง<i class="mdi-navigation-arrow-drop-down right material-icons">toc</i></a>
            <span class= "card indigo darken-4 white-text">ขาไป</span>
            <span class= "card  blue white-text">ขากลับ</span>                
            </div>
        <div id="map"></div>

        <div class="row teal darken-3 white-text">      
            <div class="col s12 m12 l12">
                <h4>รถโพถ้อง สายที่ 3</h4>
            </div>
            <div class="col s12 m12 l12">
                <h5>ชื่อเส้นทาง : ศูนย์การค้าโลตัส - วิทยาลัยอาชีวะศึกษาภูเก็ต</h5>
            </div>
        </div>
        <div class="row ">
            <div class="col s6 m6 l6 "> 
                <div class="card horizontal">
                    <u>ขาไป </u>:<br>
                        @foreach($getRouteGoOn3 as $key=>$getRouteGoOn)
                        {{$key+1}}. {{$getRouteGoOn->busstop_name}} <br>
                        @endforeach
                </div>
            </div>   
            <div class="col s6 m6 l6">
                <div class="card horizontal">
                  <u>ขากลับ</u>:<br>
                      @foreach($getRouteTurnOn3 as $key=>$getRouteTurnOn)
                      {{$key+19}}. {{$getRouteTurnOn->busstop_name}} <br>
                      @endforeach
                </div>
            </div>
        </div>

    <script>
    var markers = [];
    var map;
            function initMap(){
                    map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
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
        var icons = 'https://images.r.cruisecritic.com/misc/cruiselineStar20121001.png';
        @foreach($recommend as $recommend)
        var markers{{$recommend->attractions_id}} = new google.maps.Marker({
          place_id: {{$recommend->attractions_id}},
          position: {lat: {{$recommend->attractions_latitude}}, lng: {{$recommend->attractions_longitude}}},
          map: map,
          icon: icons
        });
        var info{{$recommend->attractions_id}} = new google.maps.InfoWindow({
          content: '{{$recommend->attractions_name}}'
        });
        markers{{$recommend->attractions_id}}.addListener('click', function() {
        info{{$recommend->attractions_id}}.open(map, markers{{$recommend->attractions_id}});
        });
        @endforeach
            @foreach($getRouteId3 as $key=>$getRoudeIds)
            var marker{{$getRoudeIds->busstop_id}} = new google.maps.Marker({
                position: {lat: {{$getRoudeIds->busstop_latitude}}, lng: {{$getRoudeIds->busstop_longitude}}},
              map: map
            });
            var infowindow{{$getRoudeIds->busstop_id}} = new google.maps.InfoWindow({
              content: '{{$key+1}}. {{$getRoudeIds->busstop_name}}'
            });
            marker{{$getRoudeIds->busstop_id}}.addListener('click', function() {
            infowindow{{$getRoudeIds->busstop_id}}.open(map, marker{{$getRoudeIds->busstop_id}});
            });
            @endforeach


            var busnumber3go = [
                @foreach($getRoadGo3 as $getRoadGo)
                {lat: {{$getRoadGo->road_latitude}}, lng: {{$getRoadGo->road_longitude}}},
                @endforeach                
            ];
            var busnumber3back = [
                @foreach($getRoadBack3 as $getRoadBack)
                {lat: {{$getRoadBack->road_latitude}}, lng: {{$getRoadBack->road_longitude}}},
                @endforeach
            ];


        var busPath3go = new google.maps.Polyline({
          path: busnumber3go,
          geodesic: true,
          strokeColor: '#1a237e',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        var busPath3back = new google.maps.Polyline({
          path: busnumber3back,
          geodesic: true,
          strokeColor: '#2196f3',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        busPath3go.setMap(map);
        busPath3back.setMap(map);
        }
      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          // icon: iconBase,
          icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: 'blue',
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
        $.ajax({url: "http://128.199.195.185/api/v2/givepos3", success: function(result){
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
         var marker = new google.maps.Marker({
         position: new google.maps.LatLng(no1[i].lat, no1[i].lng),
         icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 10,
                fillColor: 'blue',
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