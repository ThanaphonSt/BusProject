@extends('app')

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
		<div class="google-maps">
			<iframe
 		 		width="600"
 		 		height="450"
 		 		frameborder="0" style="border:0"
 		 		src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBYoKx2-ce6XMQDsCET7TD8RJiKVgTK-_0
 		   		&q=Space+Needle,Seattle+WA" allowfullscreen>
			</iframe>
		</div>

@endsection