@extends('app')
@section('brand')
เส้นทางเดินรถโพถ้อง
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
            <span class= "card red white-text">สายที่1</span>
            <span class= "card green white-text">สายที่2</span>
            <span class= "card blue darken-4 white-text">สายที่3</span>
      </div>
      <div id="map"></div>
      <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: 7.883135, lng: 98.387156},
          mapTypeId: 'roadmap'
        });

            var busnumber1 = [
                @foreach($getRoadGo as $getRoadGo)
                {lat: {{$getRoadGo->road_latitude}}, lng: {{$getRoadGo->road_longitude}}},
                @endforeach                
            ];

            var busnumber2 = [
                @foreach($getRoadGo2 as $getRoadGo)
                {lat: {{$getRoadGo->road_latitude}}, lng: {{$getRoadGo->road_longitude}}},
                @endforeach                
            ];   

            var busnumber3 = [
                @foreach($getRoadGo3 as $getRoadGo)
                {lat: {{$getRoadGo->road_latitude}}, lng: {{$getRoadGo->road_longitude}}},
                @endforeach                
            ];     

            var busPath1 = new google.maps.Polyline({
                path: busnumber1,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });
            var busPath2 = new google.maps.Polyline({
                path: busnumber2,
                geodesic: true,
                strokeColor: '#11BB00',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

            var busPath3 = new google.maps.Polyline({
                path: busnumber3,
                geodesic: true,
                strokeColor: '#0101DF',
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

            busPath1.setMap(map);
            busPath2.setMap(map);
            busPath3.setMap(map);
}
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

  @endsection