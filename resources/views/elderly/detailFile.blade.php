@extends('elderly.template')

@section('title')
เอกสารข้อมูลที่เกี่ยวข้องกับผู้สูงอายุ
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/detailFile.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
    <div class="detailFile z-depth-2 center-align">
    	<h4>เอกสารข้อมูลที่เกี่ยวข้องกับผู้สูงอายุ</h4>
    </div>

    <iframe name="tutor" marginwidth="0" marginheight="0" frameborder="0" width="100%" scrolling="" height="500" src="{{url($elderly->file)}}" style="z-index:100;"> </iframe>

    <div class="row">
        <div class="col m12 s12 center-align">
            <a href="../detailElderly/{{ $elderly->id }}" type="submit" class="back waves-effect waves-light btn-large">ย้อนกลับ</a>
        </div>
	</div>

</div>

@endsection

@section('footer')
@endsection

@section('script')
@endsection