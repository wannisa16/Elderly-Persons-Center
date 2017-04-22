@extends('elderly.template')

@section('title')
รายละเอียดการบริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailD.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')

	<div class="card card-define col m12">
		<div class="row">
			<div class="layout-title col m10 offset-m1">รายละเอียดการบริจาค</div>
		</div>
		<div class="row">
			<div class="col m4 offset-m1">
				<div class="card-image waves-effect  waves-light">
                    <img class="activator" src="{{url('images/1.jpg')}}">
                </div>
			</div>
			<div class="layout-text col m6">
				<div class="row">
					<div class="col m6 s12">ชื่อ : {{$donate->d_name}}</</div>
				</div>
				<div class="row">
					<div class="col m6 s12">นามสกุล : {{$donate->d_surname}}</div>
				</div>
				<div class="row">
					<div class="col m12 s12">เบอร์โทร : {{$donate->d_tel}}</div>
				</div>
				<div class="row">
					<div class="col m12 s12">อีเมล : {{$donate->d_email}}</div>
				</div>
				<div class="row">
					<div class="col m12 ">ที่อยู่ : {{$donate->d_address}}</div>
				</div>
				<div class="row">
					<div class="col m12">สิ่งของบริจาค : {{$donate->d_object}}</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('footer')
@endsection

@section('script')
@endsection