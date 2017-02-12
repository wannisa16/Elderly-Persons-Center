@extends('elderly/template')
@section('title')
เกี่ยวกับ
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/aboutme.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col m2 layout-title">ประวัติ</div>
	</div>
	<p class="flow-text">บ้านพักคนชราป่าคลอก จังหวัดภูเก็ต ก่อตั้งขึ้นเมื่อ XX XX XXXX โดยนาย บลาๆๆๆๆๆๆๆๆๆๆ ได้รับการสนับสนุนจากXXXXXXX โรงพยาบาลและเทศบาล บลาๆๆๆๆๆๆๆๆ โดยจุดประสงค์เพื่อช่วยเหลือผู้สูงอายุที่ถูกทอดทิ้ง ไร้บ้าน พิการ มีพนักานและทีมดูแลผู้สูงอายุภายในบ้านพักอยู่จำนวนนึง บลาๆๆๆๆๆๆๆๆๆ</p>

	<div class="row">
		<div class="tab-title col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#goal"><h4>เป้าหมาย<h4></a></li>
        <li class="tab col s3"><a  href="#obligation"><h4>พันธกิจ</h4></a></li>
        <li class="tab col s3"><a href="#role"><h4>ภารกิจ</h4></a></li>
        <li class="tab col s3"><a href="#vision"><h4>วิสัยทัศน์</h4></a></li>
      </ul>
    </div>
    <div id="goal">
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">1</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">2</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    </div>
    	
    <div id="obligation">
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">1</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">2</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    </div>

    <div id="role">
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">1</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">2</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    </div>        

    <div id="vision">
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">1</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col m1 offset-m1">
    			<p class="layout-number center-align">2</p>
    	    </div>
    		<div class="col m9">
    			<p class="layout-text">เพื่อฟื้นฟูสมรรถภาพและพัฒนาศักยภาพในด้านต่างๆ แก่ผู้สูงอายุ</p>
    		</div>
    	</div>
    </div>
    
	</div>
	
</div>
@endsection

@section('script')
 <script src="{{ asset('/elderly/js/publicize.js') }}"></script> 
@endsection