@extends('app')
@section('brand')
เส้นทางเดินรถโพถ้องสายที่ 1
@endsection
    <title>PHO TONG in Phuket</title>
      <!-- Compiled and minified CSS -->
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
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
      </div>
        <div id="map"></div>

        <div class="row teal darken-3 white-text">      
            <div class="col s12 m12 l12">
                <h4>รถโพถ้อง สายที่ 1</h4>
            </div>
            <div class="col s12 m12 l12">
                <h5>ชื่อเส้นทาง: ศูนย์การค้าโลตัส - วิทยาลัยอาชีวะศึกษาภูเก็ต</h5>
            </div>
        </div>
        <div class="row ">
            <div class="col s6 m6 l6 "> 
                <div class="card horizontal">
                    <u>เที่ยวไป </u>:<br>
                        @foreach($getRouteGoOns as $getRouteGoOn)
                        - {{$getRouteGoOn->route_name}} <br>
                        @endforeach
                </div>
            </div>   
            <div class="col s6 m6 l6">
                <div class="card horizontal">
                  <u>เที่ยวกลับ</u>:<br>
                      @foreach($getRouteTurnOns as $getRouteTurnOn)
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
                // @foreach($getRouteId as $getRoudeIds)
                // var marker = new google.maps.Marker({
                //   position: {lat: {{$getRoudeIds->busstop_latitude}}, lng: {{$getRoudeIds->busstop_longitude}}},
                //   map: map
                // });
                // @endforeach
 
        var point1 = {lat: 7.896844, lng: 98.368431};
        var point2 = {lat: 7.906094, lng: 98.369024};
        var point3 = {lat: 7.898514, lng: 98.383368};
        var point4 = {lat: 7.890437, lng: 98.389899};
        var point5 = {lat: 7.889291, lng: 98.386203};
        var point6 = {lat: 7.881771, lng: 98.383985};
        var point7 = {lat: 7.883005, lng: 98.387231};
        var point8 = {lat: 7.883353, lng: 98.393679};
        var point9 = {lat: 7.880165, lng: 98.392313};
        var point10 = {lat: 7.878115, lng: 98.393096};
        var point11 = {lat: 7.874051, lng: 98.393885};
        var point12 = {lat: 7.871419, lng: 98.393953};
        var point13 = {lat: 7.868661, lng: 98.395767};
        var point14 = {lat: 7.863928, lng: 98.400856};
        var point15 = {lat: 7.862845, lng: 98.401488};
        var point16 = {lat: 7.863010, lng: 98.398790};
        var point17 = {lat: 7.866506, lng: 98.392760};
        var point18 = {lat: 7.869540, lng: 98.392430};
        var marker = new google.maps.Marker({
          position: point1,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point2,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point3,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point4,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point5,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point6,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point7,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point8,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point9,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point10,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point11,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point12,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point13,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point14,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point15,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point16,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point17,
          map: map
        });
        var marker = new google.maps.Marker({
          position: point18,
          map: map
        });

                var busNumber1 = [
                    {lat: 7.896788, lng: 98.368462},
                    {lat: 7.901780, lng: 98.367881},
                    {lat: 7.904144, lng: 98.367557},
                    {lat: 7.904212, lng: 98.367571},
                    {lat: 7.905785, lng: 98.367590},
                    {lat: 7.906075, lng: 98.369101},
                    {lat: 7.906730, lng: 98.371787},
                    {lat: 7.906756, lng: 98.371832},
                    {lat: 7.906768, lng: 98.371909},
                    {lat: 7.906732, lng: 98.372270},
                    {lat: 7.906729, lng: 98.372453},
                    {lat: 7.906761, lng: 98.372639},
                    {lat: 7.906763, lng: 98.372757},
                    {lat: 7.906889, lng: 98.373151},
                    {lat: 7.906894, lng: 98.373223},
                    {lat: 7.906916, lng: 98.373277},
                    {lat: 7.906924, lng: 98.373459},
                    {lat: 7.906907, lng: 98.373612},
                    {lat: 7.906877, lng: 98.373803},
                    {lat: 7.906871, lng: 98.373914},
                    {lat: 7.906895, lng: 98.374439},
                    {lat: 7.907041, lng: 98.375143},
                    {lat: 7.907075, lng: 98.375429},
                    {lat: 7.907120, lng: 98.376661},
                    {lat: 7.907114, lng: 98.376949},
                    {lat: 7.907107, lng: 98.377100},
                    {lat: 7.906758, lng: 98.377877},
                    {lat: 7.903858, lng: 98.377633},
                    {lat: 7.903583, lng: 98.377652},
                    {lat: 7.903216, lng: 98.377725},
                    {lat: 7.902957, lng: 98.377856},
                    {lat: 7.902714, lng: 98.377958},
                    {lat: 7.902524, lng: 98.378120},
                    {lat: 7.902284, lng: 98.378685},
                    {lat: 7.901962, lng: 98.379798},
                    {lat: 7.901750, lng: 98.380434},
                    {lat: 7.901613, lng: 98.380654},
                    {lat: 7.901342, lng: 98.380972},
                    {lat: 7.900129, lng: 98.382112},
                    {lat: 7.900030, lng: 98.382225},
                    {lat: 7.899636, lng: 98.382656},
                    {lat: 7.899353, lng: 98.382897},
                    {lat: 7.897935, lng: 98.383744},
                    {lat: 7.895894, lng: 98.384727},
                    {lat: 7.893920, lng: 98.385681},
                    {lat: 7.893685, lng: 98.385743},
                    {lat: 7.893272, lng: 98.385794},
                    {lat: 7.892532, lng: 98.385812},
                    {lat: 7.891570, lng: 98.385869},
                    {lat: 7.891679, lng: 98.386966},
                    {lat: 7.891904, lng: 98.388901},
                    {lat: 7.891947, lng: 98.389282},
                    {lat: 7.891997, lng: 98.389790},
                    {lat: 7.891311, lng: 98.389897},
                    {lat: 7.891238, lng: 98.389882},
                    {lat: 7.890496, lng: 98.389974},
                    {lat: 7.889858, lng: 98.388067},
                    {lat: 7.889323, lng: 98.386273},
                    {lat: 7.889039, lng: 98.385049},
                    {lat: 7.888492, lng: 98.383030},
                    {lat: 7.888397, lng: 98.382706},
                    {lat: 7.888341, lng: 98.382182},
                    {lat: 7.887769, lng: 98.382244},
                    {lat: 7.886743, lng: 98.382309},
                    {lat: 7.886120, lng: 98.382366},
                    {lat: 7.883768, lng: 98.382520},
                    {lat: 7.883793, lng: 98.382927},
                    {lat: 7.883796, lng: 98.383054},
                    {lat: 7.883779, lng: 98.383252},
                    {lat: 7.883752, lng: 98.383349},
                    {lat: 7.883477, lng: 98.383470},
                    {lat: 7.883110, lng: 98.383460},
                    {lat: 7.882686, lng: 98.383641},
                    {lat: 7.882588, lng: 98.383673},
                    {lat: 7.882147, lng: 98.383812},
                    {lat: 7.882075, lng: 98.383845},
                    {lat: 7.881897, lng: 98.383912},
                    {lat: 7.881463, lng: 98.384074},
                    {lat: 7.881398, lng: 98.384107},
                    {lat: 7.881292, lng: 98.384150},
                    {lat: 7.881881, lng: 98.383898},
                    {lat: 7.881447, lng: 98.384073},
                    {lat: 7.881247, lng: 98.384178},
                    {lat: 7.881019, lng: 98.384392},
                    {lat: 7.880951, lng: 98.384471},
                    {lat: 7.880480, lng: 98.384932},
                    {lat: 7.880180, lng: 98.385265},
                    {lat: 7.881315, lng: 98.386455},
                    {lat: 7.881545, lng: 98.386663},
                    {lat: 7.881953, lng: 98.387064},
                    {lat: 7.882031, lng: 98.387124},
                    {lat: 7.882081, lng: 98.387152},
                    {lat: 7.882117, lng: 98.387164},
                    {lat: 7.882466, lng: 98.387207},
                    {lat: 7.882795, lng: 98.387239},
                    {lat: 7.883045, lng: 98.387261},
                    {lat: 7.883052, lng: 98.387233},
                    {lat: 7.883079, lng: 98.387190},
                    {lat: 7.883098, lng: 98.387176},
                    {lat: 7.883135, lng: 98.387156},
                    {lat: 7.883185, lng: 98.387154},
                    {lat: 7.883234, lng: 98.387172},
                    {lat: 7.883276, lng: 98.387205},
                    {lat: 7.883292, lng: 98.387250},
                    {lat: 7.883292, lng: 98.387291},
                    {lat: 7.883344, lng: 98.387302},
                    {lat: 7.883801, lng: 98.387362},
                    {lat: 7.883727, lng: 98.388303},
                    {lat: 7.883706, lng: 98.388491},
                    {lat: 7.883656, lng: 98.389424},
                    {lat: 7.883574, lng: 98.390827},
                    {lat: 7.883577, lng: 98.390932},
                    {lat: 7.883481, lng: 98.392144},
                    {lat: 7.883448, lng: 98.392743},
                    {lat: 7.883347, lng: 98.393324},
                    {lat: 7.883321, lng: 98.393622},
                    {lat: 7.883334, lng: 98.393719},
                    {lat: 7.883321, lng: 98.393622},
                    {lat: 7.883347, lng: 98.393324},
                    {lat: 7.883448, lng: 98.392743},
                    {lat: 7.882980, lng: 98.392648},
                    {lat: 7.882440, lng: 98.392540},
                    {lat: 7.882255, lng: 98.392519},
                    {lat: 7.881611, lng: 98.392438},
                    {lat: 7.880967, lng: 98.392377},
                    {lat: 7.880570, lng: 98.392365},
                    {lat: 7.880494, lng: 98.392337},
                    {lat: 7.880459, lng: 98.392358},
                    {lat: 7.880428, lng: 98.392365},
                    {lat: 7.880403, lng: 98.392366},
                    {lat: 7.880371, lng: 98.392359},
                    {lat: 7.880337, lng: 98.392345},
                    {lat: 7.880311, lng: 98.392331},
                    {lat: 7.880284, lng: 98.392311},
                    {lat: 7.880264, lng: 98.392291},
                    {lat: 7.880256, lng: 98.392272},
                    {lat: 7.880246, lng: 98.392257},
                    {lat: 7.879935, lng: 98.392365},
                    {lat: 7.879600, lng: 98.392479},
                    {lat: 7.879096, lng: 98.392660},
                    {lat: 7.878639, lng: 98.392849},
                    {lat: 7.878528, lng: 98.392893},
                    {lat: 7.878078, lng: 98.393079},
                    {lat: 7.877342, lng: 98.393369},
                    {lat: 7.876865, lng: 98.393595},
                    {lat: 7.876391, lng: 98.393766},
                    {lat: 7.876363, lng: 98.393754},
                    {lat: 7.874011, lng: 98.393850},
                    {lat: 7.872961, lng: 98.393899},
                    {lat: 7.872375, lng: 98.393902},
                    {lat: 7.872178, lng: 98.393887},
                    {lat: 7.871641, lng: 98.393899},
                    {lat: 7.871347, lng: 98.393918},
                    {lat: 7.870429, lng: 98.394110},
                    {lat: 7.869895, lng: 98.394249},
                    {lat: 7.869637, lng: 98.394367},
                    {lat: 7.869578, lng: 98.394404},
                    {lat: 7.869425, lng: 98.394556},
                    {lat: 7.869151, lng: 98.395014},
                    {lat: 7.869031, lng: 98.395157},
                    {lat: 7.868619, lng: 98.395789},
                    {lat: 7.868636, lng: 98.395892},
                    {lat: 7.868616, lng: 98.395952},
                    {lat: 7.868543, lng: 98.396087},
                    {lat: 7.868458, lng: 98.396191},
                    {lat: 7.868390, lng: 98.396241},
                    {lat: 7.868344, lng: 98.396236},
                    {lat: 7.867963, lng: 98.396919},
                    {lat: 7.867737, lng: 98.397260},
                    {lat: 7.867613, lng: 98.397394},
                    {lat: 7.867442, lng: 98.397507},
                    {lat: 7.867215, lng: 98.397603},
                    {lat: 7.866587, lng: 98.397892},
                    {lat: 7.866496, lng: 98.397936},
                    {lat: 7.866309, lng: 98.398089},
                    {lat: 7.866063, lng: 98.398373},
                    {lat: 7.865509, lng: 98.399013},
                    {lat: 7.865312, lng: 98.399230},
                    {lat: 7.864463, lng: 98.400247},
                    {lat: 7.863974, lng: 98.400775},
                    {lat: 7.863277, lng: 98.401606},
                    {lat: 7.863241, lng: 98.401640},
                    {lat: 7.863215, lng: 98.401651},
                    {lat: 7.863168, lng: 98.401649},
                    {lat: 7.863131, lng: 98.401637},
                    {lat: 7.862839, lng: 98.401451},
                    {lat: 7.862715, lng: 98.401315},
                    {lat: 7.862718, lng: 98.401241},
                    {lat: 7.862943, lng: 98.400855},
                    {lat: 7.863319, lng: 98.400239},
                    {lat: 7.863467, lng: 98.400033},
                    {lat: 7.862629, lng: 98.399302},
                    {lat: 7.863357, lng: 98.398419},
                    {lat: 7.863831, lng: 98.397793},
                    {lat: 7.864306, lng: 98.397163},
                    {lat: 7.864681, lng: 98.396661},
                    {lat: 7.865516, lng: 98.395148},
                    {lat: 7.865881, lng: 98.394406},
                    {lat: 7.865532, lng: 98.394201},
                    {lat: 7.865928, lng: 98.393388},
                    {lat: 7.866139, lng: 98.393043},
                    {lat: 7.866272, lng: 98.392921},
                    {lat: 7.867982, lng: 98.392052},
                    {lat: 7.869351, lng: 98.391407},
                    {lat: 7.869476, lng: 98.391372},
                    {lat: 7.869506, lng: 98.391888},
                    {lat: 7.869513, lng: 98.392483}
                ];
        var busPath1 = new google.maps.Polyline({
          path: busNumber1,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 5.0,
          strokeWeight: 5
        });
        busPath1.setMap(map);

        }
        </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
    @endsection