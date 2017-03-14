@extends('app')
@section('brand')
ร้านอาหาร
@endsection

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
@section('content')


      <div class="teal darken-4">
          <ul id="dropdown2" class="dropdown-content">
              <li><a href="{{url('/recommendshopping')}}">ห้างสรรพสินค้า</a></li>
              <li><a href="{{url('/recommendrestaurant')}}">ร้านอาหาร</a></li>
              <li><a href="{{url('/recommendhotel')}}">โรงแรม</a></li>
          </ul>
          <a class="btn dropdown-button" href="#!" data-activates="dropdown2">เลือกสิ่งที่คุณสนใจ<i class="mdi-navigation-arrow-drop-down right material-icons">toc</i></a>
      </div>
      <script>
      function initMap() {
       var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 7.883135, lng: 98.387156},
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            name: 'Parking',
            icon: 'http://blog.toledocard.com/wp-content/uploads/2015/10/transport_icon_01.png'
          },
          library: {
            name: 'Library',
            icon: 'http://blog.toledocard.com/wp-content/uploads/2015/10/transport_icon_01.png'
          },
          info: {
            name: 'Info',
            icon: 'http://minitmart.com/images/316/customassets/homepage/footericons/icon_food.png'
          }
        };
          @foreach($recommendRestaurant as $recommendRestaurant)
        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }
        
        var features = [
          { 

            position: new google.maps.LatLng({{$recommendRestaurant->restaurant_latitude}}, {{$recommendRestaurant->restaurant_longitude}}),
            type: 'info'
          }
        ];
        @endforeach

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }

        var legend = document.getElementById('legend');
        
        
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

     <div id="map"></div>

@endsection