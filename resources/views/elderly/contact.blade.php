@extends('elderly.template')
@section('title')
ติดต่อเรา
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/contact.css') }}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<meta charset="utf-8">
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
                @if (Auth::guest())
                @else    
                    <div class="row">
                        <a class="address center" href="contacts/{{$address->id}}/edit"><h5>แก้ไขที่อยู่</h5></a>
                    </div>
                @endif
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
                @if (Auth::guest())
                @else    
                    <div class="row">
                        <a class="tel center" href="contacts/{{$tel->id}}/edit"><h5>แก้ไขเบอร์โทรศัพท์</h5></a>
                    </div>
                @endif
            </div>

    	    <div class="col s12 m4">
                <div class="card-panel z-depth-3">
                    <div class="row">
                        <div class="mail col s12 m12">
                            <i class="medium material-icons">person_pin</i>
                        </div>
                    </div>
                    @foreach ($emails as $email)
                    <div class="row">
                        <div class="pmail col s12 m12">
                            <p>อีเมล์ : {{$email->content}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if (Auth::guest())
                @else    
                    <div class="row">
                        <a class="email center" href="contacts/{{$email->id}}/edit"><h5>แก้ไขอีเมล์</h5></a>
                    </div>
                @endif
            </div> 
    	</div>
    </form>
</div>
<div id="map"></div>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map{
        height: 100%;
    }
      /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBcGEB09qNZ2lj9DZhb8w53elz8lGrJFo&callback"></script>

    <script>
      // In the following example, markers appear when the user clicks on the map.
      // Each marker is labeled with a single alphabetical character.
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
        var bangalore = { lat: 8.0162866, lng: 98.4094486 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: bangalore
        });

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {
          addMarker(event.latLng, map);
        });

        // Add a marker at the center of the map.
        addMarker(bangalore, map);
      }

      // Adds a marker to the map.
    function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@endsection

@section('footer')
@endsection

@section('script')
@endsection