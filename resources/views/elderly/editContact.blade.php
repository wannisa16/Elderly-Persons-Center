@extends('elderly.template')

@section('title')
รายละเอียดการบริจาค
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/editContacts.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
		<form action="../../contacts/{{ $contacts->id }}" method="POST" role="form">
    		<div class="row">
				<div class="col m12 layout-title">แก้ไขข้อมูลติดต่อเรา</div>
			</div>
		
			<div class="row">
        		<div class="input-field col s12">
         	    	<textarea name="contact" id="textarea1" class="materialize-textarea">{{ $contacts->content }}</textarea>
        		</div>
    		</div>

    		<div class="row">
                <div class="right-align">
                    <input type="hidden" name="_method" value="PUT" />
                    <button type="submit" class="agree waves-effect waves-light btn-large">ตกลง</button>
                </div>
            </button>
        </div>  
		</form>
	</div>
@endsection


@section('footer')
@endsection

@section('script')
@endsection