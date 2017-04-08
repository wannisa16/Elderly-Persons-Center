@extends('elderly.template')
@section('title')
ติดต่อเรา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/contacts.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
  <div class="contact z-depth-2 center-align"><h4>ติดต่อสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div><br>
    <div class="row">
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">   
          <div class="row">
            <div class="add col s12 m12">
              <i class="medium material-icons">location_on</i>
            </div>
          </div>
           @foreach ($addresss as $address)
            <div class="row">
            <div class="padd col s12 m12">
              <p>{{$address->content}}</p> 
            </div>
            </div>
          @endforeach 
    		</div>
      </div>
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">
          <div class="row">
            <div class="call col s12 m12">
              <i class="medium material-icons">phone</i>
            </div>
          </div>
            @foreach ($tels as $tel)
              <div class="row">
              <div class="pcall col s12 m12">
    			    <p>โทรศัพท์ : {{$tel->content}}</p>
              </div>
              </div>
            @endforeach
    		</div>
      </div>
    
    
    	<div class="col s12 m4">
        <div class="card-panel z-depth-3">
          <div class="row">
            <div class="mail col s12 m12">
              <i class="medium material-icons">person_pin</i>
            </div>
          </div>
              <div class="row">
              <div class="pmail col s12 m12">
              @foreach ($emails as $email)
              <p>อีเมล์ : {{$email->content}}</p>
              @endforeach
              @foreach ($facebooks as $facebook)
              <p>Facebook : {{$facebook->content}}</p>
              @endforeach
              </div>
              </div> 
    		</div>
      </div>
    </div>
</div>
  <div id="map" style="width:100%;height:500px"></div><br>
  

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