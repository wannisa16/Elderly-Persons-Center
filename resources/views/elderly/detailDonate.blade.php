@extends('elderly.template')

@section('title')
รายละเอียดการบริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailDonate.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">	
	<div class="card card-define col m12">
		<div class="row">
			<div class="layout-title col m10 offset-m1">รายละเอียดการบริจาค</div>
		</div>
		<div class="row">
			<div class="col m4 offset-m1">
				@if($donor->d_picture == "")
				<div class="card-image waves-effect  waves-light">
                    <img class="activator" src="{{url('images/noPhoto.png')}}">
                </div>
                @else
				<div class="card-image waves-effect  waves-light">
                    <img class="activator" alt="ไม่มีรูป" src="{{url($donor->d_picture)}}">
                </div>
                @endif
			</div>
			<div class="layout-text col m6">
				<div class="row">
					<div class="col m12">สิ่งของบริจาค : {{$donor->d_object}}</div>
				</div>
				<div class="row">
					<div class="col m6 s12">ชื่อ : {{$donor->d_name}}</div>
				</div>
				<div class="row">
					<div class="col m6 s12">นามสกุล : {{$donor->d_surname}}</div>
				</div>
				<div class="row">
					<div class="col m12 s12">เบอร์โทร : {{$donor->d_tel}}</div>
				</div>
				<div class="row">
					<div class="col m12 s12">อีเมล : {{$donor->d_email}}</div>
				</div>
				<div class="row">
					<div class="col m12">รายละเอียดเพิ่มเติม : {{$donor->d_detail}}</div>
				</div>
				<div class="row">
					<div class="col m12 ">ที่อยู่ : บ้านเลขที่ {{$donor->d_number}} หมู่ {{$donor->d_village}} ตรอก {{$donor->d_alley}} ซอย {{$donor->d_lane}} ถนน {{$donor->d_road}} ตำบล/แขวง {{$donor->d_subdistrict}} อำเภอ/เขต {{$donor->d_district}} จังหวัด {{$donor->d_province}} รหัสไปรษณีย์ {{$donor->d_postal}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="../donates/{{$donor->id}}" method="post" role="form">
		@if (!Auth::guest())
		<div class="row">
            <div class="col s6 right-align">
                <a href="{{$donor->id}}/edit" type="submit" class="edit waves-effect waves-light btn-large"><i class="tiny material-icons left">mode_edit</i>แก้ไข</a>
            </div>
            <div class="col s6">
            	<input type="hidden" name="_method" value="DELETE" />
            	<button class="cancel waves-effect waves-light btn-large"><i class="tiny material-icons left">delete</i>ลบ</button>
            </div>
    	</div>
    	@else
    	<div class="row">
    		<div class="col s12 center-align">
                <a href="create" type="submit" class="cancel waves-effect waves-light btn-large">ย้อนกลับ</a>
            </div>
    	</div>
    	@endif
    </form>
</div>
	
@endsection


@section('footer')
@endsection

@section('script')
@endsection