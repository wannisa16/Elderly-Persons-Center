@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/activity.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
        <div class="activity"><h4 class="z-depth-3">กิจกรรมในสถานสงเคราะห์ผู้สูงอายุ จังหวัดภูเก็ต</h4></div>
    </div>

    <div class="col s12 m7">
    	<div class="card horizontal">
      		<div class="card-image">
        		<img src="http://lorempixel.com/100/190/nature/6">
      		</div>
      		<div class="card-stacked">
        		<div class="card-content">
          			<p>I am a very simple card. I am good at containing small bits of information.</p>
        		</div>
        		<div class="card-action">
          			<a href="#">This is a link</a>
        		</div>
      		</div>
    	</div>
  	</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection