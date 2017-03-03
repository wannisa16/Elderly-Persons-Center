@extends('elderly.template')
@section('title')
ติดต่อเรา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/contact.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="contact z-depth-2 center-align"><h4>ติดต่อสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div>
    	<div class="row">
    		<div class="col s4 ">
                <div class="card-panel red accent-1">    
                    <i class="add medium material-icons ">location_on</i>
    			    <p>สถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต
				    11/41 หมู่4 ถ.บ้านดอนเชิงทะเล ต.เชิงทะเล อ.ถลาง ภูเก็ต</p> 
    		    </div>
            </div>
    		<div class="col s4">
                <div class="card-panel  red accent-1">
                    <i class="call medium material-icons">phone</i>
    			    <p class="center-align">โทรศัพท์ : 086 952 5113</p> 
    		    </div>
            </div>
    		<div class="col s4 ">
                <div class="card-panel red accent-1">
                    <i class="mail medium material-icons">email</i>
    			    <p class="center-align">อีเมล์ : nartruthai.nkr@gmail.com</p> 
    		    </div>
            </div>
    	</div>
</div>
   <div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850); 
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

@endsection

@section('footer')
@endsection

@section('script')
@endsection