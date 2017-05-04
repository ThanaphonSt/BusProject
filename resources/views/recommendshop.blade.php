@extends('app')
@section('brand')
ห้างสรรพสินค้า
@endsection
@section('content')
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
<div id="map"></div>
   <script>
       function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 7.883135, lng: 98.387156},
          mapTypeId: 'roadmap'
        });
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = 'http://bboylaces.com/includes/templates/carlisle_fresh/images/cart.png';
        @foreach($recommendShop as $recommendShops)
        var marker{{$recommendShops->shopping_id}} = new google.maps.Marker({
          place_id: {{$recommendShops->shopping_id}},
          position: {lat: {{$recommendShops->shopping_latitude}}, lng: {{$recommendShops->shopping_longitud}}},
          map: map,
          icon: icons
        });
        var infowindow{{$recommendShops->shopping_id}} = new google.maps.InfoWindow({
          content: '{{$recommendShops->shopping_name}}'
        });
        marker{{$recommendShops->shopping_id}}.addListener('click', function() {
        infowindow{{$recommendShops->shopping_id}}.open(map, marker{{$recommendShops->shopping_id}});
        });
        @endforeach
        }

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
 @endsection