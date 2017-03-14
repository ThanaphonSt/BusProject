@extends('app')
@section('brand')
สถานที่แนะนำ
@endsection
@section('content')
<style>
    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
<div class="teal darken-4">
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="{{url('/recommendshopping')}}">ห้างสรรพสินค้า</a></li>
        <li><a href="{{url('/recommendrestaurant')}}">ร้านอาหาร</a></li>
        <li><a href="{{url('/recommendhotel')}}">โรงแรม</a></li>
    </ul>
    <a class="btn dropdown-button" href="#!" data-activates="dropdown2">เลือกสิ่งที่คุณสนใจ<i class="mdi-navigation-arrow-drop-down right material-icons">toc</i></a>
</div>
 	<div class ="google-maps">
		<iframe
  			width="650"
  			height="450"
  			frameborder="0" style="border:0"
  			src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBYoKx2-ce6XMQDsCET7TD8RJiKVgTK-_0&q=Prince+of+Songkla+university+in+Phuket" allowfullscreen>
		</iframe>
	</div>

 
@endsection