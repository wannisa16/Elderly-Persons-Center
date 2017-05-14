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
    <div class="detailFile z-depth-2 center-align"><h4>เอกสารข้อมูลที่เกี่ยวข้องกับผู้สูงอายุ</h4></div>

    <iframe src="{{url('data/test.pdf')}}" style="width: 100%;height: 500%;border: none;"></iframe>

    <div class="row">
        <div class="col m12 s12 center-align">
            <a href="" type="submit" class="back waves-effect waves-light btn-large">ย้อนกลับ</a>
        </div>
	</div>

</div>

@endsection

@section('footer')
@endsection

@section('script')
@endsection