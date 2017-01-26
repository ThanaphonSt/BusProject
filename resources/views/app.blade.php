<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Laravel</title>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <style>
        body {
            font-family: 'Lato';
        }

        .icon-menu{
            margin-left: 20px;
            border-radius: 10px;
            color: #ffffff;
            height: 39px !important;
            line-height: 39px !important;
            box-shadow: 1px 1px 1px 1px ##bdbdbd;
        }
        .side-nav{
            width: 240px;
        }
        .layout-nav{
          margin-left: 24px;
          margin-right: 24px;
        }
        @media only screen and (min-width : 993px) {
            header, main, footer {
                padding-left: 240px;
            }
            .container{
                width: 85%
            }

            .logo-size{
                font-size: 30px;
            }
        }
        @media only screen and (max-width : 992px) {
            header, main, footer {
                padding-left: 0;
            }
            a.page-title {
                font-size: 36px;
            }
            nav .nav-wrapper {
                text-align: center;
            }
                    }
        @media only screen and (max-width : 600px) {
            header, main, footer {
                padding-left: 0;
            }
            a.page-title {
                font-size: 24px;
            }
            nav .nav-wrapper {
                text-align: center;
                margin-left: 0px !important;
            }
            .container{
                margin-left: 0px !important;
                width: 100% !important;
            }
        }
        #scroll {
            position:fixed;
            right:10px;
            bottom:10px;
            cursor:pointer;
            bottom: 45px;
            right: 50px;
            background-color:#ffb300;
            display:none;
            -webkit-border-radius:60px;
            -moz-border-radius:60px;
            border-radius:60px;
          }
        #scroll:hover {
            background-color:#bdbdbd;
            opacity:3;filter:"alpha(opacity=100)";
            -ms-filter:"alpha(opacity=100)";
        }
        .page-title{
            font-size:48px;
        }
        nav{
            height: 64px;
        }
        .middle-nav{
            padding-top: 8px;
        }
        .container{
            margin-right: 100px;
            margin-left: 40px;
        }.userView{
            padding-top: 155px !important;
            padding-left: 0px !important;
            height:200px !important;
            margin-bottom: 0px !important;
        }
        div.background {
            background: url(klematis.jpg) repeat;
            border: 2px solid black;
            height:200px !important;
            width: 240px !important;
        }

        div.transbox {
            background:rgba(0,0,0,0.5) !important;
            background-color :black;
        }

        div.transbox a {
            font-weight: bold;
            color: #000000;
        }
        .nav-font-size{
            font-size:12px !important;
        }.image-size{
            height:200px;
            width:240px;
        }.home-layout{
            width:240px;
        }.home-font-size{
            font-size:16px ;
        }

    </style>
</head>
<body id="app-layout">
    <ul id="slide-out" class="side-nav fixed">
        <li>
            <div class="userView z-depth-1">
                <img class="background image-size" src="https://moschaam2013.files.wordpress.com/2013/12/e0b8a3e0b896e0b89be0b8a3e0b8b0e0b888e0b8b3e0b897e0b8b2e0b887.jpg">
                <div class="transbox hoverable home-layout ">
                    <a class ="waves-effect waves-light " data-position="right" data-delay="50" href="http://localhost/laravel/public/dashboard">
                        <span class="home-font-size black-text truncate " >
                            รถประจำทางภูเก็ต
                        </span>
                    </a>
                </div>
            </div>
        </li>
        <li class="#00695c teal darken-3 z-depth-1 border row ">
            <span class="white-text title-menu col s5 offset-s5">
                เมนู
            </span>
        </li>
        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
            <li>
                <a class="collapsible-header waves-effect"><i class="material-icons">info</i>รถโพถ้อง</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="http://localhost/laravel/public/busdetail" class="waves-effect truncate">เส้นทางเดินรถโพถ้อง</a></li>
                        <li><a href="http://localhost/laravel/public/busstop" class="waves-effect truncate">ป้ายรถโพถ้อง</a></li>
                        <li><a href="http://localhost/laravel/public/busfare" class="waves-effect truncate">ค่าโดยสารรถโพถ้อง</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="collapsible-header waves-effect"><i class="material-icons">info</i>รถสองแถว</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="http://localhost/laravel/public/busdetail" class="waves-effect truncate">เส้นทางเดินรถสองแถว</a></li>
                    </ul>
                </div>                
            </li>
            <li>
                <a class="collapsible-header waves-effect truncate"><i class="material-icons">info</i>รถแอร์พอร์ทบัส</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="http://localhost/laravel/public/busdetail" class="waves-effect truncate">เส้นทางเดินรถแอร์พอร์ทบัส</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </ul>
    
    <nav class="middle-nav panel #00695c teal darken-3">
        <div class="left hide-on-med-and-down">
            <div  id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>
            </div>
        </div>
    </nav>

    <main>
    @yield('content')
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(".button-collapse").sideNav();
        $('.collapsible').collapsible({accordion : false});
    </script>    

</body>
</html>
