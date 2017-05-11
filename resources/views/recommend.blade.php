@extends('app')
@section('brand')
สถานที่แนะนำ
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
    <div id="map"></div>
    <script>
       function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 7.883135, lng: 98.387156},
          mapTypeId: 'roadmap'
        });
        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = 'http://wfarm4.dataknet.com/static/resources/icons/set4/64b6bbca2e8.png';
        @foreach($recommend as $recommend)
        var marker{{$recommend->attractions_id}} = new google.maps.Marker({
          place_id: {{$recommend->attractions_id}},
          position: {lat: {{$recommend->attractions_latitude}}, lng: {{$recommend->attractions_longitude}}},
          map: map,
          icon: icons
        });
        var infowindow{{$recommend->attractions_id}} = new google.maps.InfoWindow({
          content: '{{$recommend->attractions_name}}'
        });
        marker{{$recommend->attractions_id}}.addListener('click', function() {
        infowindow{{$recommend->attractions_id}}.open(map, marker{{$recommend->attractions_id}});
        });
        @endforeach
        }

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>


 
@endsection