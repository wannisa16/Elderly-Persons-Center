@extends('elderly.template')
@section('title')
ประชาสัมพันธ์
@endsection

@section('link') 

<link href="{{ URL::asset('elderly/css/publicizes.css') }}" rel="stylesheet" type="text/css" media="all" />

@endsection
@section('band')
@endsection

@section('content')

<div class="container">

	<div class="row">
		<label class="layout-title col m12 z-depth-3"><p class="font-title " align="center">ประชาสัมพันธ์</p></label>
	</div>

	<div class="row">
		@foreach ($publicizes as $publize)

		<div class="col m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="images/3.jpg">
				</div>
				<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">{{$publize->title}}<i class="material-icons right">more_vert</i></span>
					<p><a href="#">This is a link</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>

		@endforeach

	</div>

</div>


<ul class="pagination" align="center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
        

@endsection

@section('script')
<!-- <script src="{{ asset('/elderly/js/publicize.js') }}"></script> -->

@endsection
