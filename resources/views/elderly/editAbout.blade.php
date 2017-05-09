@extends('elderly/template')
@section('title')
แก้ไขเกี่ยวกับ
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/editAbout.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <form action="../editAbout/{{ $story->id }}" method="POST" role="form">
    	<div class="row">
			<div class="col m12 layout-title">แก้ไขข้อมูลเกี่ยวกับ</div>
		</div>
		
		<div class="row">
        	<div class="input-field col s12">
         	    <textarea name="story" id="textarea1" class="materialize-textarea">{{ $story->content }}</textarea>
        	</div>
    	</div>

    	<div class="row">
    		<button class="btn waves-effect waves-light right " type="submit" name="action">Submit
    		<i class="material-icons right">send</i>
    		</button>
    	</div>  
    	
    </form>
</div>
   
@endsection

@section('script')
 <script src="{{ asset('/elderly/js/about.js') }}"></script> 
@endsection