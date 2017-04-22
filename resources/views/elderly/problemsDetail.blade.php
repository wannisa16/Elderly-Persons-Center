@extends('elderly.template')

@section('title')
รายละเอียดการแจ้งผู้ประสบปัญหาทางสังคม
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/problemsdetail.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
	<div class="pd z-depth-2 center-align"><h4>รายละเอียดการแจ้งผู้ประสบปัญหาทางสังคม</h4></div><br>
	<div class="card card-define col m12">
		<div class="row">
			<div class="layout-title col m10 offset-m1">รายละเอียดผู้ประสบปัญหาทางสังคม</div>
		</div>
		<div class="row">
			<div class="col m4 offset-m1">
				<div class="card-image waves-effect  waves-light">
                    <img class="activator" src="{{url('images/1.jpg')}}">
                </div>
			</div>
			<div class="layout-text col m6">
				<div class="row">
					<div class="col m6 s12">ชื่อ : นาย สมาย</div>
				</div>
				<div class="row">
					<div class="col m6 s12">นามสกุล : ช่วยเกิน</div>
				</div>
				<div class="row">
					<div class="col m6 s12">เพศ : ชาย</div>
				</div>
				<div class="row">
					<div class="col m6 s12">อายุ : 55 ปี</div>
				</div>
				<div class="row">
					<div class="col m12 s12">เบอร์โทร : 089-1234567</div>
				</div>
				<div class="row">
					<div class="col m12 ">รายละเอียด : มีแผลที่แขน ขนาดปานกลาง </div>
				</div>
				<div class="row">
					<div class="col m12">สถานะการช่วยเหลือ : ไม่ได้รับการช่วยเหลือ</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card card-define col m12">
		<div class="row">
			<div class="layout-title col m10 offset-m1">รายละเอียดผู้แจ้ง</div>
		</div>
		<div class="row">
			<div class="layout-text col m6 offset-m1">
				<div class="row">
					<div class="col m6 s12">ชื่อ : นาย สมมาณ</div>
				</div>
				<div class="row">
					<div class="col m6 s12">นามสกุล : ปกป้อง</div>
				</div>
				<div class="row">
					<div class="col m12 s12">เบอร์โทร : 089-1234567</div>
				</div>
				<div class="row">
					<div class="col m12 ">อีเมล์ : Lueilwitz.Shayne@example.net </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
@endsection

@section('script')
@endsection