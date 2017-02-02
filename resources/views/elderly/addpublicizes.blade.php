@extends('elderly.template')
@section('title')
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/addpublicizes.css') }}" rel="stylesheet" type="text/css" media="all" /> 
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
        <div class="add"><h4 class="z-depth-3">เพิ่มประชาสัมพันธ์</h4></div>
    </div>
    
    <div class="container">
        <div class="title row">
    	   <div class="input-field col s6">
                <input id="input_text" type="text">
                    <label for="input_text"><h5>เรื่อง</h5></label>
            </div>
        </div>

        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1"><h5>ข้อความ</h5></label>
                </div>
            </div>
        </form>

        <form action="#">
    	   <div class="file-field input-field">
                <div class="btn">
        <span class="photo">เเลือกรูปภาพ</span>
        <input type="file" multiple>
      </div>
      		    
      	     <div class="file-path-wrapper">
        		<input class="file-path validate" type="text" placeholder="เพิ่มรูปภาพได้มากกว่าหนึ่งรูป">
      		</div>
    	   </div>
  	     </form><br><br>

  	     <button class="btn waves-effect waves-light" type="submit" name="action">เพิ่มประชาสัมพันธ์
    	   <i class="material-icons right">send</i>
  	     </button>
  	</div><br><br>
@endsection

@section('footer')
@endsection

@section('script')
@endsection