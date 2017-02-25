@extends('elderly.template')
@section('title')
ประชาสัมพันธ์
@endsection

@section('link') 

<link href="{{ URL::asset('elderly/css/publicize.css') }}" rel="stylesheet" type="text/css" media="all" />

@endsection
@section('band')
@endsection

@section('content')

<div class="container">

	<div class="row">
		<label class="layout-title col m12 z-depth-3"><p class="font-title " align="center">ประชาสัมพันธ์</p></label>
	</div>

	<div class="row">
		@foreach ($publicizes as $publicize)
			@foreach ($publicize->Images as $Image)
			
		<div class="col m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{$Image->imagename}} " width="150" height="200">
				</div>
				
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">{{$publicize->title}}<i class="material-icons right">more_vert</i></span>	
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">{{$publicize->title}}<i class="material-icons right">close</i></span>
					<p>{{$publicize->content}}</p>
				</div>
			</div>
			
		</div>
		@endforeach	
		@endforeach

	</div>
	<div class="row">
		<div align="center">{{$publicizes->render()}}</div>
	</div>

</div>

        

@endsection

@section('script')
<!-- <script src="{{ asset('/elderly/js/publicize.js') }}"></script> -->

@endsection
