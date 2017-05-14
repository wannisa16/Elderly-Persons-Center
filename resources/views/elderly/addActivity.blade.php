@extends('elderly.template')
@section('title')
เพิ่มกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/addActivityy.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
  @if ( count($errors) > 0 )
        <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
  @endif
	<div class="addactivity z-depth-2 center-align">
        <h4>เพิ่มกิจกรรม ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุภูเก็ต</h4>
    </div>
    <form action="{{url('/addActivity')}}" method="post" enctype="multipart/form-data" class="col s12">	
	    <div class="card card-define col m12">
		    <div class="row">
      		    <div class="row">
          			<div class="input-field col s6">
            			<input id="input_text" type="text" name="title" class="story">
            			<label for="input_text">กิจกรรมเรื่อง</label>
          			</div>
        		</div>
        		<div class="row">
          			<div class="input-field col s12">
            			<textarea id="textarea1" class="materialize-textarea" name="content"></textarea>
            			<label for="textarea1">รายละเอียดของกิจกรรม</label>
          			</div>
        		</div>
      		</div>
    	

    	    <div class="file-field input-field">
      		    <div class="btn waves-effect waves-light">
        		  <span>เลือกรูปภาพ</span>
        		  <input name="photo[]" type="file" multiple>
      		    </div>
      		    <div class="file-path-wrapper">
        		  <input class="file-path validate" type="text" placeholder="สามารถโหลดรูปได้มากว่าหนึ่งรูป">
      		    </div>
    	    </div>
	    </div>
  	    <div class="row">
            <div class="col s6 right-align">
                <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
            </div>
            <div class="col s6">
                <a href="indexActivity" class="cancel waves-effect waves-light btn-large">ยกเลิก</a>
            </div>
        </div>
    </form>
</div>

@endsection

@section('footer')
@endsection

@section('script')
@endsection