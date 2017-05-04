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
                zoom: 14,
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
            
            var busNumber1 = [
                {lat: 7.893676, lng: 98.365683},
                {lat: 7.893299, lng: 98.365890},
                {lat: 7.892149, lng: 98.366416},
                {lat: 7.889576, lng: 98.367769},
                {lat: 7.891349, lng: 98.368672},
                {lat: 7.892433, lng: 98.368913},
                {lat: 7.896226, lng: 98.368519},
                {lat: 7.902543, lng: 98.367819},
                {lat: 7.905787, lng: 98.367605},
                {lat: 7.906093, lng: 98.369123},
                {lat: 7.906768, lng: 98.371880},
                {lat: 7.906723, lng: 98.372287},
                {lat: 7.906764, lng: 98.372704},
                {lat: 7.906901, lng: 98.373206},
                {lat: 7.906915, lng: 98.373288},
                {lat: 7.906930, lng: 98.373606},
                {lat: 7.906893, lng: 98.373888},
                {lat: 7.906931, lng: 98.374556},
                {lat: 7.907059, lng: 98.375127},
                {lat: 7.907121, lng: 98.376059},
                {lat: 7.907139, lng: 98.376638},
                {lat: 7.907113, lng: 98.377169},
                {lat: 7.906758, lng: 98.377908},
                {lat: 7.903977, lng: 98.377649},
                {lat: 7.903256, lng: 98.377739},
                {lat: 7.902706, lng: 98.377990},
                {lat: 7.902530, lng: 98.378126},
                {lat: 7.901965, lng: 98.379840},
                {lat: 7.901790, lng: 98.380414},
                {lat: 7.901628, lng: 98.380696},
                {lat: 7.900958, lng: 98.381377},
                {lat: 7.900137, lng: 98.382136},
                {lat: 7.899691, lng: 98.382691},
                {lat: 7.898506, lng: 98.383438},
                {lat: 7.896967, lng: 98.384196},
                {lat: 7.893794, lng: 98.385736},
                {lat: 7.891571, lng: 98.385875},
                {lat: 7.892007, lng: 98.389795},
                {lat: 7.891321, lng: 98.389904},
                {lat: 7.891246, lng: 98.389889},
                {lat: 7.890453, lng: 98.389995},
                {lat: 7.888539, lng: 98.383327},
                {lat: 7.888382, lng: 98.382698},
                {lat: 7.888005, lng: 98.379683},
                {lat: 7.887075, lng: 98.374117},
                {lat: 7.886888, lng: 98.374054},
                {lat: 7.886529, lng: 98.374943},
                {lat: 7.884575, lng: 98.380165},
                {lat: 7.884344, lng: 98.380421},
                {lat: 7.883816, lng: 98.380958},
                {lat: 7.883723, lng: 98.381316},
                {lat: 7.883785, lng: 98.382507},
                {lat: 7.883767, lng: 98.383339},
                {lat: 7.883515, lng: 98.383465},
                {lat: 7.883068, lng: 98.383464},
                {lat: 7.881328, lng: 98.384137},
                {lat: 7.880178, lng: 98.385260},
                {lat: 7.881517, lng: 98.386620},
                {lat: 7.881997, lng: 98.387087},
                {lat: 7.882121, lng: 98.387159},
                {lat: 7.883037, lng: 98.387263},
                {lat: 7.883062, lng: 98.387209},
                {lat: 7.883110, lng: 98.387169},
                {lat: 7.883176, lng: 98.387152},
                {lat: 7.883275, lng: 98.387202},
                {lat: 7.883296, lng: 98.387291},
                {lat: 7.883791, lng: 98.387341},
                {lat: 7.883776, lng: 98.387778},
                {lat: 7.883728, lng: 98.388424},
                {lat: 7.883632, lng: 98.389856},
                {lat: 7.883586, lng: 98.390876},
                {lat: 7.883467, lng: 98.392725},
                {lat: 7.883326, lng: 98.393624},
                {lat: 7.883343, lng: 98.393712},
                {lat: 7.883267, lng: 98.394380},
                {lat: 7.883767, lng: 98.394396},
                {lat: 7.883791, lng: 98.395177},
                {lat: 7.883711, lng: 98.395442},
                {lat: 7.883728, lng: 98.395617},
                {lat: 7.883700, lng: 98.395925},
                {lat: 7.883035, lng: 98.395926},
                {lat: 7.883091, lng: 98.395237},
                {lat: 7.883438, lng: 98.392750},
                {lat: 7.882278, lng: 98.392526},
                {lat: 7.880963, lng: 98.392382},
                {lat: 7.880871, lng: 98.392355},
                {lat: 7.880579, lng: 98.392371},
                {lat: 7.880517, lng: 98.392348},
                {lat: 7.880388, lng: 98.392369},
                {lat: 7.880285, lng: 98.392321},
                {lat: 7.880241, lng: 98.392260},
                {lat: 7.876858, lng: 98.393601},
                {lat: 7.876419, lng: 98.393759},
                {lat: 7.873063, lng: 98.393912},
                {lat: 7.872373, lng: 98.393909},
                {lat: 7.872154, lng: 98.393885},
                {lat: 7.871545, lng: 98.393915},
                {lat: 7.871317, lng: 98.393939},
                {lat: 7.870421, lng: 98.394103},
                {lat: 7.869737, lng: 98.394309},
                {lat: 7.869582, lng: 98.394426},
                {lat: 7.869429, lng: 98.394567},
                {lat: 7.869132, lng: 98.395028},
                {lat: 7.869023, lng: 98.395160},
                {lat: 7.868619, lng: 98.395774},
                {lat: 7.868626, lng: 98.395840},
                {lat: 7.868626, lng: 98.395921},
                {lat: 7.868547, lng: 98.396081},
                {lat: 7.868460, lng: 98.396195},
                {lat: 7.868383, lng: 98.396242},
                {lat: 7.868343, lng: 98.396237},
                {lat: 7.867973, lng: 98.396905},
                {lat: 7.867747, lng: 98.397246},
                {lat: 7.867637, lng: 98.397371},
                {lat: 7.867445, lng: 98.397507},
                {lat: 7.866605, lng: 98.397883},
                {lat: 7.866451, lng: 98.397962},
                {lat: 7.866308, lng: 98.398079},
                {lat: 7.864752, lng: 98.399902},
                {lat: 7.864026, lng: 98.400733},
                {lat: 7.863946, lng: 98.400810},
                {lat: 7.863247, lng: 98.401631},
                {lat: 7.863138, lng: 98.401647},
                {lat: 7.862737, lng: 98.401349},
                {lat: 7.862705, lng: 98.401265},
                {lat: 7.863316, lng: 98.400232},
                {lat: 7.863459, lng: 98.400027},
                {lat: 7.862629, lng: 98.399301},
                {lat: 7.863356, lng: 98.398413},
                {lat: 7.863829, lng: 98.397794},
                {lat: 7.864669, lng: 98.396670},
                {lat: 7.865511, lng: 98.395168},
                {lat: 7.865894, lng: 98.394390},
                {lat: 7.866045, lng: 98.394072},
                {lat: 7.866295, lng: 98.393635},
                {lat: 7.866553, lng: 98.393308},
                {lat: 7.866720, lng: 98.393166},
                {lat: 7.867235, lng: 98.392914},
                {lat: 7.869365, lng: 98.391865},
                {lat: 7.869501, lng: 98.391777},
                {lat: 7.869525, lng: 98.392229}

                ];
            var busNumber1back =[
                {lat: 7.869515, lng: 98.392517},
                {lat: 7.869457, lng: 98.393346},
                {lat: 7.869481, lng: 98.393690},
                {lat: 7.869585, lng: 98.394022},
                {lat: 7.869760, lng: 98.394247},
                {lat: 7.871326, lng: 98.393868},
                {lat: 7.871823, lng: 98.393824},
                {lat: 7.872178, lng: 98.393839},
                {lat: 7.872725, lng: 98.393843},
                {lat: 7.873111, lng: 98.393840},
                {lat: 7.875289, lng: 98.393749},
                {lat: 7.876374, lng: 98.393691},
                {lat: 7.876837, lng: 98.393541},
                {lat: 7.877319, lng: 98.393312},
                {lat: 7.877911, lng: 98.393086},
                {lat: 7.878717, lng: 98.392739},
                {lat: 7.879595, lng: 98.392386},
                {lat: 7.880109, lng: 98.392153},
                {lat: 7.880242, lng: 98.392119},
                {lat: 7.880306, lng: 98.392045},
                {lat: 7.880418, lng: 98.392001},
                {lat: 7.880505, lng: 98.392038},
                {lat: 7.880551, lng: 98.391975},
                {lat: 7.880904, lng: 98.391753},
                {lat: 7.881267, lng: 98.391596},
                {lat: 7.881535, lng: 98.391465},
                {lat: 7.882147, lng: 98.391142},
                {lat: 7.882210, lng: 98.391139},
                {lat: 7.882730, lng: 98.390863},
                {lat: 7.882908, lng: 98.390672},
                {lat: 7.883041, lng: 98.389761},
                {lat: 7.883108, lng: 98.388367},
                {lat: 7.883174, lng: 98.387839},
                {lat: 7.883154, lng: 98.387406},
                {lat: 7.883107, lng: 98.387387},
                {lat: 7.883067, lng: 98.387346},
                {lat: 7.883047, lng: 98.387264},
                {lat: 7.883074, lng: 98.387197},
                {lat: 7.883128, lng: 98.387159},
                {lat: 7.883174, lng: 98.387149},
                {lat: 7.883268, lng: 98.386214},
                {lat: 7.883350, lng: 98.385663},
                {lat: 7.883605, lng: 98.384373},
                {lat: 7.883758, lng: 98.383318},
                {lat: 7.883797, lng: 98.382914},
                {lat: 7.883763, lng: 98.382497},
                {lat: 7.883699, lng: 98.381451},
                {lat: 7.883714, lng: 98.381308},
                {lat: 7.883805, lng: 98.380956},
                {lat: 7.884333, lng: 98.380414},
                {lat: 7.884533, lng: 98.380177},
                {lat: 7.885531, lng: 98.377503},
                {lat: 7.886224, lng: 98.375679},
                {lat: 7.886686, lng: 98.374477},
                {lat: 7.886882, lng: 98.374018},
                {lat: 7.886954, lng: 98.373809},
                {lat: 7.887069, lng: 98.373993},
                {lat: 7.887190, lng: 98.374507},
                {lat: 7.887438, lng: 98.376090},
                {lat: 7.887598, lng: 98.376935},
                {lat: 7.887779, lng: 98.378067},
                {lat: 7.888017, lng: 98.379630},
                {lat: 7.888184, lng: 98.380872},
                {lat: 7.888354, lng: 98.382179},
                {lat: 7.888482, lng: 98.383016},
                {lat: 7.888918, lng: 98.384647},
                {lat: 7.889037, lng: 98.385050},
                {lat: 7.889347, lng: 98.386267},
                {lat: 7.889565, lng: 98.387052},
                {lat: 7.889786, lng: 98.387779},
                {lat: 7.890061, lng: 98.388676},
                {lat: 7.890376, lng: 98.389593},
                {lat: 7.890498, lng: 98.389963},
                {lat: 7.891229, lng: 98.389880},
                {lat: 7.891310, lng: 98.389834},
                {lat: 7.891982, lng: 98.389726},
                {lat: 7.891796, lng: 98.388103},
                {lat: 7.891550, lng: 98.385866},
                {lat: 7.892523, lng: 98.385811},
                {lat: 7.893596, lng: 98.385753},
                {lat: 7.893816, lng: 98.385703},
                {lat: 7.895063, lng: 98.385103},
                {lat: 7.895891, lng: 98.384710},
                {lat: 7.897049, lng: 98.384132},
                {lat: 7.897924, lng: 98.383726},
                {lat: 7.898491, lng: 98.383420},
                {lat: 7.899602, lng: 98.382701},
                {lat: 7.897935, lng: 98.383738},
                {lat: 7.899615, lng: 98.382722},
                {lat: 7.900114, lng: 98.382110},
                {lat: 7.900917, lng: 98.381347},
                {lat: 7.901610, lng: 98.380650},
                {lat: 7.901753, lng: 98.380389},
                {lat: 7.902064, lng: 98.379340},
                {lat: 7.902492, lng: 98.378133},
                {lat: 7.902495, lng: 98.378142},
                {lat: 7.902917, lng: 98.377849},
                {lat: 7.903221, lng: 98.377712},
                {lat: 7.903956, lng: 98.377612},
                {lat: 7.906741, lng: 98.377886},
                {lat: 7.907086, lng: 98.377177},
                {lat: 7.907038, lng: 98.375152},
                {lat: 7.907030, lng: 98.375159},
                {lat: 7.906852, lng: 98.373880},
                {lat: 7.906907, lng: 98.373494},
                {lat: 7.906890, lng: 98.373210},
                {lat: 7.906758, lng: 98.372757},
                {lat: 7.906705, lng: 98.372642},
                {lat: 7.906654, lng: 98.372367},
                {lat: 7.906673, lng: 98.371961},
                {lat: 7.905837, lng: 98.368434},
                {lat: 7.905716, lng: 98.367874},
                {lat: 7.904222, lng: 98.367840},
                {lat: 7.902231, lng: 98.368060},
                {lat: 7.898180, lng: 98.368443},
                {lat: 7.894191, lng: 98.368966},
                {lat: 7.892783, lng: 98.369127},
                {lat: 7.892140, lng: 98.369084},
                {lat: 7.891743, lng: 98.369023},
                {lat: 7.891104, lng: 98.368807},
                {lat: 7.889296, lng: 98.367841},
                {lat: 7.889718, lng: 98.367530},
                {lat: 7.892029, lng: 98.366289},
                {lat: 7.893123, lng: 98.365806},
                {lat: 7.893526, lng: 98.365603},
                {lat: 7.893667, lng: 98.365700},
                {lat: 7.894658, lng: 98.365880},
                {lat: 7.894604, lng: 98.366200},
                {lat: 7.894649, lng: 98.366329} 
            ];
          
            var busPath1 = new google.maps.Polyline({
              path: busNumber1,
              geodesic: true,
              strokeColor: '#FF0000',
              strokeOpacity: 5.0,
              strokeWeight: 3
            });
            var buspath1back= new google.maps.Polyline({
              path: busNumber1back,
              geodesic: true,
              strokeColor: '#2729A8',
              strokeOpacity: 5.0,
              strokeWeight: 3
            });
            busPath1.setMap(map);
            buspath1back.setMap(map);
        }
        </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>

    @endsection