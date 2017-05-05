@extends('app')
@section('brand')
เส้นทางเดินรถโพถ้องสายที่ 2
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
            <a class="btn dropdown-button" href="#!" data-activates="dropdown2">เลือกสายรถประจำทาง<i class="        mdi-navigation-arrow-drop-down right material-icons">toc</i></a>
        </div>
        <div id="map"></div>

    <div class="row teal darken-3 white-text">      
            <div class="col s12 m12 l12">
                <h4>รถโพถ้อง สายที่ 2</h4>
            </div>
            <div class="col s12 m12 l12">
                <h5>ชื่อเส้นทาง : สถาบันราชภัฎภูเก็ต - สถานีอนามัยแหลมชั่น</h5>
            </div>
        </div>
        <div class="row ">
            <div class="col s6 m6 l6 "> 
                <div class="card horizontal">
                    <u>เที่ยวไป </u>:<br>
                        @foreach($getRouteGoOns2 as $getRouteGoOn)
                        - {{$getRouteGoOn->route_name}} <br>
                        @endforeach
                </div>
            </div>   
            <div class="col s6 m6 l6">
                <div class="card horizontal">
                  <u>เที่ยวกลับ</u>:<br>
                      @foreach($getRouteTurnOns2 as $getRouteTurnOn)
                           - {{$getRouteTurnOn->route_name}} <br>
                      @endforeach
                </div>
            </div>
        </div>

    <script>
            function initMap(){
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: {lat: 7.883135, lng: 98.387156},
                    mapTypeId: 'roadmap'
                });

            @foreach($getRouteId as $getRoudeIds)
            var marker{{$getRoudeIds->busstop_id}} = new google.maps.Marker({
                position: {lat: {{$getRoudeIds->busstop_latitude}}, lng: {{$getRoudeIds->busstop_longitude}}},
              map: map
            });
            var infowindow{{$getRoudeIds->busstop_id}} = new google.maps.InfoWindow({
              content: '{{$getRoudeIds->busstop_name}}'
            });
            marker{{$getRoudeIds->busstop_id}}.addListener('click', function() {
            infowindow{{$getRoudeIds->busstop_id}}.open(map, marker{{$getRoudeIds->busstop_id}});
            });
            @endforeach
            


var busnumber2go = [
    { lat: 7.920887, lng: 98.395896 },
    { lat: 7.920075, lng: 98.395589 },
    { lat: 7.917916, lng: 98.394670 },
    { lat: 7.915977, lng: 98.393905 },
    { lat: 7.914473, lng: 98.393515 },
    { lat: 7.913074, lng: 98.393143 },
    { lat: 7.912722, lng: 98.393044 },
    { lat: 7.912092, lng: 98.392896 },
    { lat: 7.911438, lng: 98.392655 },
    { lat: 7.909771, lng: 98.391966 },
    { lat: 7.908684, lng: 98.391534 },
    { lat: 7.908097, lng: 98.391245 },
    { lat: 7.907473, lng: 98.390860 },
    { lat: 7.906499, lng: 98.390198 },
    { lat: 7.905282, lng: 98.389404 },
    { lat: 7.904120, lng: 98.388720 },
    { lat: 7.903719, lng: 98.388625 },
    { lat: 7.903314, lng: 98.388586 },
    { lat: 7.902651, lng: 98.388460 },
    { lat: 7.901825, lng: 98.388452 },
    { lat: 7.901493, lng: 98.388497 },
    { lat: 7.900845, lng: 98.388622 },
    { lat: 7.900721, lng: 98.388642 },
    { lat: 7.898858, lng: 98.389184 },
    { lat: 7.898604, lng: 98.389220 },
    { lat: 7.896314, lng: 98.389342 },
    { lat: 7.894537, lng: 98.389501 },
    { lat: 7.892986, lng: 98.389667 },
    { lat: 7.891987, lng: 98.389802 },
    { lat: 7.891713, lng: 98.387346 },
    { lat: 7.891550, lng: 98.385875 },
    { lat: 7.891243, lng: 98.385882 },
    { lat: 7.890404, lng: 98.385930 },
    { lat: 7.889928, lng: 98.385963 },
    { lat: 7.889686, lng: 98.386049 },
    { lat: 7.889340, lng: 98.386288 },
    { lat: 7.890074, lng: 98.388665 },
    { lat: 7.890371, lng: 98.389609 },
    { lat: 7.890503, lng: 98.389976 },
    { lat: 7.890650, lng: 98.390290 },
    { lat: 7.890731, lng: 98.390660 },
    { lat: 7.890868, lng: 98.391095 },
    { lat: 7.890984, lng: 98.391423 },
    { lat: 7.891074, lng: 98.391900 },
    { lat: 7.891045, lng: 98.392117 },
    { lat: 7.890884, lng: 98.392611 },
    { lat: 7.890497, lng: 98.393550 },
    { lat: 7.890438, lng: 98.393766 },
    { lat: 7.890403, lng: 98.394154 },
    { lat: 7.890260, lng: 98.395264 },
    { lat: 7.890196, lng: 98.396036 },
    { lat: 7.890201, lng: 98.396497 },
    { lat: 7.890226, lng: 98.396816 },
    { lat: 7.890382, lng: 98.397644 },
    { lat: 7.889996, lng: 98.397762 },
    { lat: 7.889035, lng: 98.398014 },
    { lat: 7.887945, lng: 98.398372 },
    { lat: 7.886740, lng: 98.398754 },
    { lat: 7.886158, lng: 98.398935 },
    { lat: 7.885109, lng: 98.399246 },
    { lat: 7.884310, lng: 98.399473 },
    { lat: 7.883245, lng: 98.399798 },
    { lat: 7.882675, lng: 98.399969 },
    { lat: 7.882778, lng: 98.398641 },
    { lat: 7.882843, lng: 98.398001 },
    { lat: 7.882953, lng: 98.396793 },
    { lat: 7.883029, lng: 98.395916 },
    { lat: 7.883093, lng: 98.395237 },
    { lat: 7.882605, lng: 98.395259 },
    { lat: 7.881955, lng: 98.395273 },
    { lat: 7.881307, lng: 98.395369 },
    { lat: 7.880543, lng: 98.395430 },
    { lat: 7.879960, lng: 98.395465 },
    { lat: 7.879833, lng: 98.395468 },
    { lat: 7.878578, lng: 98.395587 },
    { lat: 7.878404, lng: 98.395595 },
    { lat: 7.877740, lng: 98.395681 },
    { lat: 7.877618, lng: 98.395719 },
    { lat: 7.877607, lng: 98.395651 },
    { lat: 7.877617, lng: 98.395573 },
    { lat: 7.877516, lng: 98.395354 },
    { lat: 7.877144, lng: 98.394310 },
    { lat: 7.876846, lng: 98.393601 },
    { lat: 7.876660, lng: 98.393133 },
    { lat: 7.876217, lng: 98.391936 },
    { lat: 7.876134, lng: 98.391688 },
    { lat: 7.876076, lng: 98.391308 },
    { lat: 7.875894, lng: 98.390680 },
    { lat: 7.875823, lng: 98.390290 },
    { lat: 7.875729, lng: 98.390132 },
    { lat: 7.875566, lng: 98.389410 },
    { lat: 7.875564, lng: 98.389203 },
    { lat: 7.875831, lng: 98.388711 },
    { lat: 7.876892, lng: 98.387567 },
    { lat: 7.878709, lng: 98.385617 },
    { lat: 7.879576, lng: 98.384685 },
    { lat: 7.879502, lng: 98.382161 },
    { lat: 7.879496, lng: 98.381446 },
    { lat: 7.875802, lng: 98.379228 },
    { lat: 7.875558, lng: 98.379072 },
    { lat: 7.874599, lng: 98.378671 },
    { lat: 7.873162, lng: 98.378240 },
    { lat: 7.872929, lng: 98.378149 },
    { lat: 7.870777, lng: 98.380517 },
    { lat: 7.870523, lng: 98.380641 },
    { lat: 7.869468, lng: 98.380610 },
    { lat: 7.869378, lng: 98.380598 },
    { lat: 7.869297, lng: 98.380639 },
    { lat: 7.868608, lng: 98.380602 },
    { lat: 7.868220, lng: 98.380578 },
    { lat: 7.867043, lng: 98.380536 },
    { lat: 7.865957, lng: 98.380504 },
    { lat: 7.864258, lng: 98.380499 },
    { lat: 7.863561, lng: 98.380501 },
    { lat: 7.862582, lng: 98.380486 },
    { lat: 7.861347, lng: 98.380461 },
    { lat: 7.860827, lng: 98.380465 },
    { lat: 7.860171, lng: 98.380456 },
    { lat: 7.859376, lng: 98.380456 },
    { lat: 7.858938, lng: 98.380449 },
    { lat: 7.858940, lng: 98.380278 },
    { lat: 7.858922, lng: 98.380101 },
    { lat: 7.858715, lng: 98.379046 },
    { lat: 7.858536, lng: 98.378574 },
    { lat: 7.858362, lng: 98.378109 },
    { lat: 7.858328, lng: 98.377920 },
    { lat: 7.858330, lng: 98.377754 },
    { lat: 7.858367, lng: 98.377655 },
    { lat: 7.858396, lng: 98.377652 },
    { lat: 7.858430, lng: 98.377613 },
    { lat: 7.858501, lng: 98.377606 },
    { lat: 7.858630, lng: 98.377541 },
    { lat: 7.858729, lng: 98.377439 },
    { lat: 7.858729, lng: 98.377439 },
    { lat: 7.859001, lng: 98.376965 },
    { lat: 7.859074, lng: 98.376870 },
    { lat: 7.859680, lng: 98.376014 },
    { lat: 7.860081, lng: 98.375536 },
    { lat: 7.860413, lng: 98.375165 },
    { lat: 7.860971, lng: 98.374328 },
    { lat: 7.861166, lng: 98.373917 },
    { lat: 7.861541, lng: 98.372737 },
    { lat: 7.861894, lng: 98.371629 },
    { lat: 7.862066, lng: 98.371023 },
    { lat: 7.862423, lng: 98.370664 },
    { lat: 7.862884, lng: 98.370214 },
    { lat: 7.862588, lng: 98.369940 },
    { lat: 7.862016, lng: 98.369342 },
    { lat: 7.861336, lng: 98.368595 },
    { lat: 7.861120, lng: 98.368303 },
    { lat: 7.860864, lng: 98.368028 },
    { lat: 7.859929, lng: 98.366781 },
    { lat: 7.859417, lng: 98.366142 },
    { lat: 7.858628, lng: 98.365155 },
    { lat: 7.858380, lng: 98.364843 },
    { lat: 7.858194, lng: 98.364500 },
    { lat: 7.858078, lng: 98.364205 },
    { lat: 7.858015, lng: 98.363848 },
    { lat: 7.857928, lng: 98.363249 },
    { lat: 7.857885, lng: 98.362873 }
];
var busnumber2back = [
    { lat: 7.857953, lng: 98.362856 },
    { lat: 7.858080, lng: 98.363846 },
    { lat: 7.858253, lng: 98.364404 },
    { lat: 7.858510, lng: 98.364867 },
    { lat: 7.858981, lng: 98.365446 },
    { lat: 7.859963, lng: 98.366657 },
    { lat: 7.860730, lng: 98.367663 },
    { lat: 7.860976, lng: 98.368000 },
    { lat: 7.861213, lng: 98.368235 },
    { lat: 7.861512, lng: 98.368656 },
    { lat: 7.862234, lng: 98.369448 },
    { lat: 7.862590, lng: 98.369818 },
    { lat: 7.862940, lng: 98.370134 },
    { lat: 7.862897, lng: 98.370223 },
    { lat: 7.862691, lng: 98.370439 },
    { lat: 7.862115, lng: 98.371002 },
    { lat: 7.862060, lng: 98.371106 },
    { lat: 7.861867, lng: 98.371817 },
    { lat: 7.861567, lng: 98.372742 },
    { lat: 7.861478, lng: 98.373098 },
    { lat: 7.861201, lng: 98.373889 },
    { lat: 7.861000, lng: 98.374330 },
    { lat: 7.860620, lng: 98.374943 },
    { lat: 7.860431, lng: 98.375205 },
    { lat: 7.860010, lng: 98.375670 },
    { lat: 7.859473, lng: 98.376333 },
    { lat: 7.859028, lng: 98.376979 },
    { lat: 7.858921, lng: 98.377174 },
    { lat: 7.858752, lng: 98.377453 },
    { lat: 7.858652, lng: 98.377560 },
    { lat: 7.858493, lng: 98.377631 },
    { lat: 7.858434, lng: 98.377639 },
    { lat: 7.858420, lng: 98.377668 },
    { lat: 7.858384, lng: 98.377686 },
    { lat: 7.858358, lng: 98.377756 },
    { lat: 7.858352, lng: 98.377843 },
    { lat: 7.858355, lng: 98.377924 },
    { lat: 7.858393, lng: 98.378107 },
    { lat: 7.858554, lng: 98.378556 },
    { lat: 7.858742, lng: 98.379030 },
    { lat: 7.858950, lng: 98.380104 },
    { lat: 7.858953, lng: 98.380353 },
    { lat: 7.860136, lng: 98.380358 },
    { lat: 7.861807, lng: 98.380389 },
    { lat: 7.863299, lng: 98.380404 },
    { lat: 7.865378, lng: 98.380427 },
    { lat: 7.867036, lng: 98.380442 },
    { lat: 7.868239, lng: 98.380489 },
    { lat: 7.869184, lng: 98.380541 },
    { lat: 7.869296, lng: 98.380550 },
    { lat: 7.869394, lng: 98.380584 },
    { lat: 7.870423, lng: 98.380611 },
    { lat: 7.870518, lng: 98.380602 },
    { lat: 7.870593, lng: 98.380578 },
    { lat: 7.870741, lng: 98.380493 },
    { lat: 7.871620, lng: 98.379537 },
    { lat: 7.872291, lng: 98.378820 },
    { lat: 7.872912, lng: 98.378127 },
    { lat: 7.874576, lng: 98.378621 },
    { lat: 7.875072, lng: 98.378823 },
    { lat: 7.875564, lng: 98.379048 },
    { lat: 7.876733, lng: 98.379743 },
    { lat: 7.877994, lng: 98.380524 },
    { lat: 7.879304, lng: 98.381323 },
    { lat: 7.879610, lng: 98.381465 },
    { lat: 7.879606, lng: 98.381728 },
    { lat: 7.879642, lng: 98.383100 },
    { lat: 7.879661, lng: 98.384068 },
    { lat: 7.879664, lng: 98.384709 },
    { lat: 7.879643, lng: 98.384777 },
    { lat: 7.879443, lng: 98.384978 },
    { lat: 7.879293, lng: 98.385168 },
    { lat: 7.877662, lng: 98.386928 },
    { lat: 7.876671, lng: 98.387937 },
    { lat: 7.875899, lng: 98.388770 },
    { lat: 7.875703, lng: 98.389120 },
    { lat: 7.875677, lng: 98.389227 },
    { lat: 7.875691, lng: 98.389429 },
    { lat: 7.875776, lng: 98.389857 },
    { lat: 7.875862, lng: 98.390181 },
    { lat: 7.875841, lng: 98.390289 },
    { lat: 7.875923, lng: 98.390671 },
    { lat: 7.876098, lng: 98.391295 },
    { lat: 7.876173, lng: 98.391692 },
    { lat: 7.876249, lng: 98.391937 },
    { lat: 7.876386, lng: 98.392244 },
    { lat: 7.876842, lng: 98.393539 },
    { lat: 7.877169, lng: 98.394302 },
    { lat: 7.877558, lng: 98.395368 },
    { lat: 7.877579, lng: 98.395442 },
    { lat: 7.877633, lng: 98.395564 },
    { lat: 7.877696, lng: 98.395626 },
    { lat: 7.877717, lng: 98.395673 },
    { lat: 7.878395, lng: 98.395579 },
    { lat: 7.879837, lng: 98.395447 },
    { lat: 7.879982, lng: 98.395445 },
    { lat: 7.881301, lng: 98.395342 },
    { lat: 7.881948, lng: 98.395249 },
    { lat: 7.882602, lng: 98.395231 },
    { lat: 7.883100, lng: 98.395220 },
    { lat: 7.883185, lng: 98.395229 },
    { lat: 7.883105, lng: 98.395914 },
    { lat: 7.883030, lng: 98.396809 },
    { lat: 7.882868, lng: 98.398651 },
    { lat: 7.882763, lng: 98.399921 },
    { lat: 7.883826, lng: 98.399593 },
    { lat: 7.885103, lng: 98.399223 },
    { lat: 7.886143, lng: 98.398914 },
    { lat: 7.887935, lng: 98.398353 },
    { lat: 7.889028, lng: 98.397994 },
    { lat: 7.889286, lng: 98.397913 },
    { lat: 7.889979, lng: 98.397735 },
    { lat: 7.890356, lng: 98.397621 },
    { lat: 7.890246, lng: 98.397147 },
    { lat: 7.890175, lng: 98.396505 },
    { lat: 7.890173, lng: 98.396037 },
    { lat: 7.890239, lng: 98.395255 },
    { lat: 7.890374, lng: 98.394146 },
    { lat: 7.890417, lng: 98.393756 },
    { lat: 7.890473, lng: 98.393548 },
    { lat: 7.890795, lng: 98.392762 },
    { lat: 7.890989, lng: 98.392227 },
    { lat: 7.891052, lng: 98.391899 },
    { lat: 7.890837, lng: 98.391101 },
    { lat: 7.890711, lng: 98.390663 },
    { lat: 7.890626, lng: 98.390304 },
    { lat: 7.890478, lng: 98.389975 },
    { lat: 7.890346, lng: 98.389609 },
    { lat: 7.890022, lng: 98.388680 },
    { lat: 7.889736, lng: 98.387764 },
    { lat: 7.889318, lng: 98.386275 },
    { lat: 7.889659, lng: 98.386031 },
    { lat: 7.889913, lng: 98.385934 },
    { lat: 7.891245, lng: 98.385855 },
    { lat: 7.891567, lng: 98.385856 },
    { lat: 7.891686, lng: 98.386934 },
    { lat: 7.891739, lng: 98.387356 },
    { lat: 7.892009, lng: 98.389716 },
    { lat: 7.893667, lng: 98.389509 },
    { lat: 7.894079, lng: 98.389453 },
    { lat: 7.894273, lng: 98.389435 },
    { lat: 7.894404, lng: 98.389481 },
    { lat: 7.896327, lng: 98.389320 },
    { lat: 7.897191, lng: 98.389284 },
    { lat: 7.898702, lng: 98.389176 },
    { lat: 7.900712, lng: 98.388625 },
    { lat: 7.900889, lng: 98.388548 },
    { lat: 7.901506, lng: 98.388381 },
    { lat: 7.901866, lng: 98.388328 },
    { lat: 7.902521, lng: 98.388313 },
    { lat: 7.902732, lng: 98.388347 },
    { lat: 7.903353, lng: 98.388453 },
    { lat: 7.904160, lng: 98.388582 },
    { lat: 7.904634, lng: 98.388830 },
    { lat: 7.905279, lng: 98.389261 },
    { lat: 7.906179, lng: 98.389819 },
    { lat: 7.908137, lng: 98.391145 },
    { lat: 7.908712, lng: 98.391417 },
    { lat: 7.909880, lng: 98.391861 },
    { lat: 7.910568, lng: 98.392122 },
    { lat: 7.911564, lng: 98.392519 },
    { lat: 7.912429, lng: 98.392822 },
    { lat: 7.914034, lng: 98.393243 },
    { lat: 7.915779, lng: 98.393680 },
    { lat: 7.916757, lng: 98.394028 },
    { lat: 7.917960, lng: 98.394532 },
    { lat: 7.919100, lng: 98.394977 },
    { lat: 7.920188, lng: 98.395451 },
    { lat: 7.920829, lng: 98.395677 },
    { lat: 7.921076, lng: 98.395750 }
];
        var busPath2go = new google.maps.Polyline({
          path: busnumber2go,
          geodesic: true,
          strokeColor: '#11BB00',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        var busPath2back = new google.maps.Polyline({
          path: busnumber2back,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        busPath2go.setMap(map);
        busPath2back.setMap(map);
        }
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
@endsection