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
      // var map;
      var latitude;
      var longitude;
        $.ajax({url: "http://192.168.43.117:3001/api/v2/givepos", success: function(result){
            console.log(result);
            latitude = result.lat;
            longitude = result.lon;
        }});
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
            icon: 'https://nwrsturgeonrefinery.com/assets/themes/nwr/img/bus-icon-dark.png'
          }
        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        }
        
        var features = [
          {
            position: new google.maps.LatLng(latitude, longitude),
            // position: new google.maps.LatLng({{$position->position_latitude}}, {{$position->position_longitude}}),
            type: 'info'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }

        var legend = document.getElementById('legend');
        
        
      }
    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

  @endsection