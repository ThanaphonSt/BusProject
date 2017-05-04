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
        var point1 = {lat: 7.921122, lng: 98.395734};
        var point2 = {lat: 7.927096, lng: 98.395491};
        var point3 = {lat: 7.913441, lng: 98.393301};
        var point4 = {lat: 7.907697, lng: 98.391021};
        var point5 = {lat: 7.899765, lng: 98.388914};
        var point6 = {lat: 7.891908, lng: 98.389219};
        var point7 = {lat: 7.889516, lng: 98.386817};
        var point8 = {lat: 7.890907, lng: 98.391171};
        var point9 = {lat: 7.890054, lng: 98.397753};
        var point10 = {lat: 7.883343, lng: 98.393613};
        var point11 = {lat: 7.880042, lng: 98.395478};
        var point12 = {lat: 7.877530, lng: 98.395420};
        var point13 = {lat: 7.878866, lng: 98.385421};
        var point14 = {lat: 7.880441, lng: 98.378365};
        var point15 = {lat: 7.880916, lng: 98.368737};
        var point16 = {lat: 7.870214, lng: 98.359144};
        var point17 = {lat: 7.861417, lng: 98.353152};
        var point18 = {lat: 7.857987, lng: 98.362925};  

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

        var busNumber2 = [
            {lat: 7.921048, lng: 98.395741},
            {lat: 7.921732, lng: 98.395901},
            {lat: 7.922228, lng: 98.395985},
            {lat: 7.922599, lng: 98.396003},
            {lat: 7.922864, lng: 98.395986},
            {lat: 7.923167, lng: 98.395955},
            {lat: 7.923689, lng: 98.395897},
            {lat: 7.924816, lng: 98.395762},
            {lat: 7.925505, lng: 98.395680},
            {lat: 7.926381, lng: 98.395585},
            {lat: 7.927169, lng: 98.395524},
            {lat: 7.927514, lng: 98.395514},
            {lat: 7.928283, lng: 98.395493},
            {lat: 7.928535, lng: 98.395487},
            {lat: 7.928544, lng: 98.395657},
            {lat: 7.928336, lng: 98.395660},
            {lat: 7.927903, lng: 98.395673},
            {lat: 7.927577, lng: 98.395685},
            {lat: 7.926936, lng: 98.395709},
            {lat: 7.926592, lng: 98.395734},
            {lat: 7.926040, lng: 98.395791},
            {lat: 7.925617, lng: 98.395831},
            {lat: 7.925397, lng: 98.395852},
            {lat: 7.924708, lng: 98.395935},
            {lat: 7.924124, lng: 98.396007},
            {lat: 7.923827, lng: 98.396051},
            {lat: 7.922956, lng: 98.396149},
            {lat: 7.922623, lng: 98.396169},
            {lat: 7.922389, lng: 98.396173},
            {lat: 7.922172, lng: 98.396160},
            {lat: 7.921669, lng: 98.396064},
            {lat: 7.921484, lng: 98.396027},
            {lat: 7.920895, lng: 98.395893},
            {lat: 7.920419, lng: 98.395730},
            {lat: 7.919673, lng: 98.395417},
            {lat: 7.918626, lng: 98.394977},
            {lat: 7.916685, lng: 98.394179},
            {lat: 7.915502, lng: 98.393778},
            {lat: 7.915145, lng: 98.393677},
            {lat: 7.914642, lng: 98.393564},
            {lat: 7.913873, lng: 98.393355},
            {lat: 7.913720, lng: 98.393322},
            {lat: 7.913711, lng: 98.393318},
            {lat: 7.913201, lng: 98.393186},
            {lat: 7.912728, lng: 98.393044},
            {lat: 7.912086, lng: 98.392893},
            {lat: 7.911434, lng: 98.392662},
            {lat: 7.910469, lng: 98.392259},
            {lat: 7.909770, lng: 98.391964},
            {lat: 7.908714, lng: 98.391550},
            {lat: 7.908104, lng: 98.391250},
            {lat: 7.907475, lng: 98.390847},
            {lat: 7.907032, lng: 98.390555},
            {lat: 7.906109, lng: 98.389947},
            {lat: 7.905823, lng: 98.389756},
            {lat: 7.905222, lng: 98.389372},
            {lat: 7.904670, lng: 98.389025},
            {lat: 7.904311, lng: 98.388803},
            {lat: 7.904123, lng: 98.388728},
            {lat: 7.903723, lng: 98.388629},
            {lat: 7.903309, lng: 98.388580},
            {lat: 7.902964, lng: 98.388509},
            {lat: 7.902665, lng: 98.388462},
            {lat: 7.902504, lng: 98.388450},
            {lat: 7.901863, lng: 98.388450},
            {lat: 7.901521, lng: 98.388486},
            {lat: 7.901142, lng: 98.388556},
            {lat: 7.900824, lng: 98.388625},
            {lat: 7.900715, lng: 98.388633},
            {lat: 7.900417, lng: 98.388711},
            {lat: 7.899837, lng: 98.388867},
            {lat: 7.899553, lng: 98.388947},
            {lat: 7.899043, lng: 98.389105},
            {lat: 7.898850, lng: 98.389165},
            {lat: 7.898717, lng: 98.389184},
            {lat: 7.898596, lng: 98.389203},
            {lat: 7.898181, lng: 98.389233},
            {lat: 7.897775, lng: 98.389256},
            {lat: 7.897192, lng: 98.389296},
            {lat: 7.896350, lng: 98.389332},
            {lat: 7.895798, lng: 98.389365},
            {lat: 7.894404, lng: 98.389492},
            {lat: 7.894265, lng: 98.389515},
            {lat: 7.893103, lng: 98.389649},
            {lat: 7.892008, lng: 98.389789},
            {lat: 7.891935, lng: 98.389235},
            {lat: 7.891902, lng: 98.388915},
            {lat: 7.891725, lng: 98.387345},
            {lat: 7.891674, lng: 98.386934},
            {lat: 7.891555, lng: 98.385865},
            {lat: 7.891248, lng: 98.385872},
            {lat: 7.890808, lng: 98.385901},
            {lat: 7.890044, lng: 98.385934},
            {lat: 7.889919, lng: 98.385948},
            {lat: 7.889853, lng: 98.385969},
            {lat: 7.889665, lng: 98.386043},
            {lat: 7.889330, lng: 98.386279},
            {lat: 7.889750, lng: 98.387754},
            {lat: 7.889848, lng: 98.388057},
            {lat: 7.890052, lng: 98.388672},
            {lat: 7.890165, lng: 98.389007},
            {lat: 7.890354, lng: 98.389606},
            {lat: 7.890398, lng: 98.389708},
            {lat: 7.890487, lng: 98.389969},
            {lat: 7.890638, lng: 98.390299},
            {lat: 7.890670, lng: 98.390552},
            {lat: 7.890728, lng: 98.390713},
            {lat: 7.890969, lng: 98.391448},
            {lat: 7.891026, lng: 98.391676},
            {lat: 7.891063, lng: 98.391902},
            {lat: 7.891057, lng: 98.391994},
            {lat: 7.891031, lng: 98.392113},
            {lat: 7.890994, lng: 98.392262},
            {lat: 7.890840, lng: 98.392687},
            {lat: 7.890486, lng: 98.393542},
            {lat: 7.890431, lng: 98.393770},
            {lat: 7.890391, lng: 98.394038},
            {lat: 7.890386, lng: 98.394152},
            {lat: 7.890334, lng: 98.394512},
            {lat: 7.890249, lng: 98.395263},
            {lat: 7.890195, lng: 98.395825},
            {lat: 7.890182, lng: 98.396043},
            {lat: 7.890182, lng: 98.396501},
            {lat: 7.890232, lng: 98.396945},
            {lat: 7.890258, lng: 98.397139},
            {lat: 7.890314, lng: 98.397404},
            {lat: 7.890369, lng: 98.397635},
            {lat: 7.889988, lng: 98.397748},
            {lat: 7.889278, lng: 98.397926},
            {lat: 7.889035, lng: 98.398003},
            {lat: 7.888709, lng: 98.397056},
            {lat: 7.888187, lng: 98.395617},
            {lat: 7.887695, lng: 98.394188},
            {lat: 7.887575, lng: 98.393940},
            {lat: 7.887512, lng: 98.393873},
            {lat: 7.887286, lng: 98.393488},
            {lat: 7.887146, lng: 98.393327},
            {lat: 7.886895, lng: 98.393285},
            {lat: 7.886772, lng: 98.393271},
            {lat: 7.886410, lng: 98.393221},
            {lat: 7.885956, lng: 98.393147},
            {lat: 7.885313, lng: 98.393040},
            {lat: 7.884718, lng: 98.392943},
            {lat: 7.884457, lng: 98.392910},
            {lat: 7.884112, lng: 98.392848},
            {lat: 7.883444, lng: 98.392745},
            {lat: 7.883352, lng: 98.393329},
            {lat: 7.883315, lng: 98.393626},
            {lat: 7.883336, lng: 98.393710},
            {lat: 7.883300, lng: 98.394031},
            {lat: 7.883256, lng: 98.394392},
            {lat: 7.883214, lng: 98.394880},
            {lat: 7.883182, lng: 98.395228},
            {lat: 7.883095, lng: 98.395228},
            {lat: 7.882602, lng: 98.395256},
            {lat: 7.882422, lng: 98.395250},
            {lat: 7.881949, lng: 98.395261},
            {lat: 7.881577, lng: 98.395316},
            {lat: 7.881304, lng: 98.395357},
            {lat: 7.881054, lng: 98.395371},
            {lat: 7.880459, lng: 98.395419},
            {lat: 7.880131, lng: 98.395443},
            {lat: 7.879956, lng: 98.395460},
            {lat: 7.879946, lng: 98.396092},
            {lat: 7.879892, lng: 98.396620},
            {lat: 7.879841, lng: 98.397178},
            {lat: 7.879779, lng: 98.397482},
            {lat: 7.879547, lng: 98.398040},
            {lat: 7.879398, lng: 98.398355},
            {lat: 7.879397, lng: 98.398380},
            {lat: 7.879393, lng: 98.398404},
            {lat: 7.879357, lng: 98.398510},
            {lat: 7.879331, lng: 98.398563},
            {lat: 7.879293, lng: 98.398611},
            {lat: 7.879265, lng: 98.398641},
            {lat: 7.879221, lng: 98.398671},
            {lat: 7.879164, lng: 98.398703},
            {lat: 7.879102, lng: 98.398724},
            {lat: 7.879054, lng: 98.398730},
            {lat: 7.879008, lng: 98.398732},
            {lat: 7.878971, lng: 98.398730},
            {lat: 7.878914, lng: 98.398717},
            {lat: 7.878805, lng: 98.398687},
            {lat: 7.878748, lng: 98.398654},
            {lat: 7.878711, lng: 98.398623},
            {lat: 7.878668, lng: 98.398575},
            {lat: 7.878636, lng: 98.398523},
            {lat: 7.878601, lng: 98.398372},
            {lat: 7.878599, lng: 98.398317},
            {lat: 7.878601, lng: 98.398282},
            {lat: 7.878477, lng: 98.398049},
            {lat: 7.878397, lng: 98.397852},
            {lat: 7.878277, lng: 98.397473},
            {lat: 7.878077, lng: 98.396952},
            {lat: 7.878016, lng: 98.396790},
            {lat: 7.877863, lng: 98.396423},
            {lat: 7.877743, lng: 98.396132},
            {lat: 7.877621, lng: 98.395711},
            {lat: 7.877609, lng: 98.395652},
            {lat: 7.877620, lng: 98.395562},
            {lat: 7.877572, lng: 98.395458},
            {lat: 7.877397, lng: 98.394977},
            {lat: 7.877206, lng: 98.394464},
            {lat: 7.877153, lng: 98.394306},
            {lat: 7.876969, lng: 98.393856},
            {lat: 7.876834, lng: 98.393541},
            {lat: 7.876672, lng: 98.393122},
            {lat: 7.876544, lng: 98.392744},
            {lat: 7.876365, lng: 98.392248},
            {lat: 7.876231, lng: 98.391928},
            {lat: 7.876162, lng: 98.391690},
            {lat: 7.876091, lng: 98.391304},
            {lat: 7.875908, lng: 98.390673},
            {lat: 7.875832, lng: 98.390295},
            {lat: 7.875794, lng: 98.390250},
            {lat: 7.875728, lng: 98.390130},
            {lat: 7.875640, lng: 98.389769},
            {lat: 7.875590, lng: 98.389552},
            {lat: 7.875564, lng: 98.389373},
            {lat: 7.875564, lng: 98.389199},
            {lat: 7.875605, lng: 98.389099},
            {lat: 7.875666, lng: 98.388984},
            {lat: 7.875821, lng: 98.388737},
            {lat: 7.876131, lng: 98.388379},
            {lat: 7.876546, lng: 98.387939},
            {lat: 7.876868, lng: 98.387596},
            {lat: 7.877386, lng: 98.387060},
            {lat: 7.877850, lng: 98.386544},
            {lat: 7.878257, lng: 98.386119},
            {lat: 7.878715, lng: 98.385623},
            {lat: 7.879214, lng: 98.385095},
            {lat: 7.879231, lng: 98.385074},
            {lat: 7.879580, lng: 98.384687},
            {lat: 7.879570, lng: 98.383387},
            {lat: 7.879502, lng: 98.382168},
            {lat: 7.879504, lng: 98.381752},
            {lat: 7.879498, lng: 98.381422},
            {lat: 7.879537, lng: 98.381301},
            {lat: 7.879799, lng: 98.380742},
            {lat: 7.879954, lng: 98.380373},
            {lat: 7.880107, lng: 98.379978},
            {lat: 7.880343, lng: 98.379299},
            {lat: 7.880429, lng: 98.378947},
            {lat: 7.880447, lng: 98.378819},
            {lat: 7.880467, lng: 98.378528},
            {lat: 7.880468, lng: 98.378035},
            {lat: 7.880397, lng: 98.377450},
            {lat: 7.880333, lng: 98.377004},
            {lat: 7.880319, lng: 98.376615},
            {lat: 7.880369, lng: 98.375813},
            {lat: 7.880464, lng: 98.374389},
            {lat: 7.880484, lng: 98.373958},
            {lat: 7.880600, lng: 98.373087},
            {lat: 7.880685, lng: 98.372208},
            {lat: 7.880761, lng: 98.371493},
            {lat: 7.880774, lng: 98.371278},
            {lat: 7.880842, lng: 98.370361},
            {lat: 7.880897, lng: 98.369503},
            {lat: 7.880972, lng: 98.368699},
            {lat: 7.881002, lng: 98.368391},
            {lat: 7.881034, lng: 98.367942},
            {lat: 7.881099, lng: 98.367260},
            {lat: 7.881240, lng: 98.365663},
            {lat: 7.881332, lng: 98.364500},
            {lat: 7.881361, lng: 98.364187},
            {lat: 7.881156, lng: 98.363870},
            {lat: 7.880950, lng: 98.363800},
            {lat: 7.880639, lng: 98.363751},
            {lat: 7.879835, lng: 98.363728},
            {lat: 7.879449, lng: 98.363720},
            {lat: 7.878547, lng: 98.363696},
            {lat: 7.877114, lng: 98.363642},
            {lat: 7.876675, lng: 98.363614},
            {lat: 7.876538, lng: 98.363613},
            {lat: 7.875855, lng: 98.363574},
            {lat: 7.875451, lng: 98.363549},
            {lat: 7.874918, lng: 98.363475},
            {lat: 7.874809, lng: 98.363469},
            {lat: 7.874633, lng: 98.363433},
            {lat: 7.874262, lng: 98.363362},
            {lat: 7.874065, lng: 98.363357},
            {lat: 7.873484, lng: 98.363422},
            {lat: 7.873292, lng: 98.363411},
            {lat: 7.873116, lng: 98.363379},
            {lat: 7.873010, lng: 98.363352},
            {lat: 7.872924, lng: 98.363317},
            {lat: 7.872825, lng: 98.363256},
            {lat: 7.872722, lng: 98.363171},
            {lat: 7.872568, lng: 98.362968},
            {lat: 7.872272, lng: 98.362501},
            {lat: 7.871847, lng: 98.361833},
            {lat: 7.871621, lng: 98.361418},
            {lat: 7.871248, lng: 98.360742},
            {lat: 7.871177, lng: 98.360606},
            {lat: 7.870492, lng: 98.359481},
            {lat: 7.870296, lng: 98.359159},
            {lat: 7.870218, lng: 98.359047},
            {lat: 7.869966, lng: 98.358719},
            {lat: 7.869624, lng: 98.358295},
            {lat: 7.869285, lng: 98.357917},
            {lat: 7.868779, lng: 98.357305},
            {lat: 7.868439, lng: 98.356869},
            {lat: 7.868295, lng: 98.356687},
            {lat: 7.867723, lng: 98.355855},
            {lat: 7.867488, lng: 98.355504},
            {lat: 7.867290, lng: 98.355204},
            {lat: 7.867058, lng: 98.354763},
            {lat: 7.866943, lng: 98.354395},
            {lat: 7.866942, lng: 98.354181},
            {lat: 7.867000, lng: 98.353660},
            {lat: 7.867073, lng: 98.353527},
            {lat: 7.867200, lng: 98.352528},
            {lat: 7.867217, lng: 98.352334},
            {lat: 7.867036, lng: 98.352302},
            {lat: 7.866971, lng: 98.352274},
            {lat: 7.866945, lng: 98.352250},
            {lat: 7.866944, lng: 98.352251},
            {lat: 7.866861, lng: 98.352150},
            {lat: 7.866568, lng: 98.351727},
            {lat: 7.866300, lng: 98.351410},
            {lat: 7.865765, lng: 98.350640},
            {lat: 7.865629, lng: 98.350508},
            {lat: 7.865356, lng: 98.350289},
            {lat: 7.865107, lng: 98.350105},
            {lat: 7.864773, lng: 98.349949},
            {lat: 7.864452, lng: 98.349815},
            {lat: 7.864269, lng: 98.349676},
            {lat: 7.864099, lng: 98.349543},
            {lat: 7.863923, lng: 98.349760},
            {lat: 7.863612, lng: 98.350170},
            {lat: 7.863203, lng: 98.350698},
            {lat: 7.862910, lng: 98.351076},
            {lat: 7.862542, lng: 98.351572},
            {lat: 7.862176, lng: 98.352074},
            {lat: 7.861838, lng: 98.352537},
            {lat: 7.861608, lng: 98.352837},
            {lat: 7.861362, lng: 98.353138},
            {lat: 7.860791, lng: 98.353844},
            {lat: 7.860362, lng: 98.354378},
            {lat: 7.859490, lng: 98.355508},
            {lat: 7.859423, lng: 98.355555},
            {lat: 7.859075, lng: 98.356021},
            {lat: 7.858991, lng: 98.356134},
            {lat: 7.858924, lng: 98.356214},
            {lat: 7.858602, lng: 98.356631},
            {lat: 7.858322, lng: 98.356997},
            {lat: 7.857726, lng: 98.357755},
            {lat: 7.857686, lng: 98.357809},
            {lat: 7.857120, lng: 98.358539},
            {lat: 7.856972, lng: 98.358729},
            {lat: 7.856706, lng: 98.359073},
            {lat: 7.856996, lng: 98.359436},
            {lat: 7.857151, lng: 98.359643},
            {lat: 7.857187, lng: 98.359773},
            {lat: 7.857263, lng: 98.360014},
            {lat: 7.857344, lng: 98.360314},
            {lat: 7.857452, lng: 98.360768},
            {lat: 7.857559, lng: 98.361207},
            {lat: 7.857705, lng: 98.361801},
            {lat: 7.857841, lng: 98.362296},
            {lat: 7.857894, lng: 98.362518},
            {lat: 7.857935, lng: 98.362730},
            {lat: 7.857961, lng: 98.362913},
            {lat: 7.857974, lng: 98.363031}
        ];
        var busPath2 = new google.maps.Polyline({
          path: busNumber2,
          geodesic: true,
          strokeColor: '#11BB00',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        busPath2.setMap(map);

        }
        </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT9UOlmNjSStQdUc0GcDXa2cfZG4EdB4&callback=initMap">
    </script>
@endsection