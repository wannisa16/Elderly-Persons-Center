@extends('elderly.template')

@section('title')
รายละเอียดการแจ้งผู้ประสบปัญหาทางสังคม
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/problemsdetails.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <form action="../problems/{{$victim->victim_id}}" method="post" role="form">	
        <div class="pd z-depth-2 center-align"><h4>รายละเอียดการแจ้งผู้ประสบปัญหาทางสังคม</h4></div>
	       <div class="card card-define col m12">
		        <div class="row">
			        <div class="layout-title col m10 offset-m1">รายละเอียดผู้ประสบปัญหาทางสังคม</div>
		        </div>

		        <div class="layout-text col m12">
		            <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1">ชื่อ : {{$victim->v_name}}</div>
            	            <div class="col m6 ">นามสกุล : {{$victim->v_surname}}</div>                    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1">เลขบัตรประชาชน : {{$victim->v_idcard}}</div>
                            <div class="col m6 ">กรณีไม่มีเนืื่องจาก : {{$victim->v_whyno}}</div>
                        </div>                    
		            </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1">วัน/เดือน/ปีเกิด : {{$victim->v_birthday}}</div>
                            <div class="col m6 ">อายุ : {{$victim->v_age}}</div>                    
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1">เพศ : {{$victim->v_sex}}</div>
                            <div class="col m6 ">เชื้อชาติ : {{$victim->v_race}}</div>                     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1 ">สัญชาติ : {{$victim->v_nationality}}</div>
                            <div class="col m6 ">ศาสนา : {{$victim->v_religion}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1 ">สถานภาพ : {{$victim->v_status}}</div>
                            <div class="col m6 ">อาชีพ : {{$victim->v_career}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1 ">รายได้ : {{$victim->v_income}}</div>
                            <div class="col m6 ">ที่มาของรายได้ : {{$victim->v_source}}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m11 ">
                            <div class="col m5 offset-m1 ">สถานะ : {{$victim->v_situation}}</div>
                        </div>
                    </div>
                </div>       
	        </div>
	
	        <div class="card card-define col m12">
		        <div class="row">
			        <div class="layout-title col m10 offset-m1">สถานที่ที่พบเจอผู้ประสบปัญหาทางสังคม</div>
                </div>
		        <div class="layout-text col m6 offset-m1">
			        <div class="row">
            	        <div class="col m11 ">
                	       <div class="col m5 offset-m1 ">บ้านเลขที่ : {{$victim->v_housenumber}}</div>
                	       <div class="col m6 ">หมู่ที่ : {{$victim->v_villageno}}</div>
            	        </div>
        	        </div>
        	        <div class="row">
            	       <div class="col m11 ">
                	       <div class="col m5 offset-m1 ">ตรอก : {{$victim->v_alley}}</div>
                	       <div class="col m6 ">ซอย : {{$victim->v_alleyway}}</div>
            	        </div>
        	        </div>
        	        <div class="row">
            	       <div class="col m11 ">
                	       <div class="col m5 offset-m1 ">ถนน : {{$victim->v_road}}</div>
                	       <div class="col m6 ">ตำบล/แขวง : {{$victim->v_canton}}</div>
            	        </div>
        	        </div>
        	        <div class="row">
            	       <div class="col m11 ">
                	       <div class="col m5 offset-m1 ">อำเภอ/เขต : {{$victim->v_district}}</div>
                	       <div class="col m6 ">จังหวัด : {{$victim->v_province}}</div>
            	        </div>
        	        </div>
        	        <div class="row">
            	        <div class="col m11 ">
                	       <div class="col m5 offset-m1 ">รหัสไปรษณีย์ : {{$victim->v_postcode}}</div>
            	        </div>
        	        </div>	
		        </div>
	        </div>

	        <div class="card card-define col m12">
		        <div class="row">
			        <div class="layout-title col m10 offset-m1">รายละเอียดผู้แจ้ง</div>
		        </div>
			    <div class="layout-text col m10 offset-m1">
				    <div class="row">
					   <div class="col m6 offset-m1 s12">ชื่อ : {{$helper->h_name}}</div>
				    </div>
				    <div class="row">
					   <div class="col m6 offset-m1 s12">นามสกุล : {{$helper->h_surname}}</div>
				    </div>
				    <div class="row">
					   <div class="col m12 offset-m1 s12">เบอร์โทร : {{$helper->h_tel}}</div>
				    </div>
				    <div class="row">
					   <div class="col m12 offset-m1 s12">อีเมล์ : {{$helper->h_email}}</div>
				    </div>
			    </div>
		    </div>
            
            @if (!Auth::guest())
		    <div class="row">
                <div class="col s6 right-align">
                    <a href="{{$victim->victim_id}}/edit" type="submit" class="edit waves-effect waves-light btn-large"><i class="tiny material-icons left">mode_edit</i>แก้ไข</a>
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