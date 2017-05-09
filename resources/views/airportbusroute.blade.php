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
              function initMap(){
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: {lat: 7.883135, lng: 98.387156},
                    mapTypeId: 'roadmap'
                });
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
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
@endsection