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
        var icons = 'https://www.heartofbiking.org.nz/assets/Uploads/HOB-Icon-Food-25px.png';
        @foreach($recommendRestaurant as $restaurant)
        var marker{{$restaurant->restaurant_id}} = new google.maps.Marker({
          place_id: {{$restaurant->restaurant_id}},
          position: {lat: {{$restaurant->restaurant_latitude}}, lng: {{$restaurant->restaurant_longitude}}},
          map: map,
          icon: icons
        });
        var infowindow{{$restaurant->restaurant_id}} = new google.maps.InfoWindow({
          content: '{{$restaurant->restaurant_name}}'
        });
        marker{{$restaurant->restaurant_id}}.addListener('click', function() {
        infowindow{{$restaurant->restaurant_id}}.open(map, marker{{$restaurant->restaurant_id}});
        });
        @endforeach
        }
    </script>


    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

     <div id="map"></div>

@endsection