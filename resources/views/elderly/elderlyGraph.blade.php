@extends('elderly.template')
@section('title')
รายงานสรุปข้อมูลผู้สูงอายุ
@endsection

@section('link')
<link href="{{URL::asset('elderly/css/elderlyGraph.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
<div class="container">
	<div class="elderlygraph z-depth-2 center-align"><h4>รายงานสรุปข้อมูลผู้สูงอายุ</h4></div><br>
	<div class="row col m6 center">
		<a href="ageChart"><img src="{{url('images/age.png')}}" alt="LOGO" class="img-responsive" width="400"></a>
	<div class="col m6">
		<a href="gradeChart"><img src="{{url('images/criterion.png')}}" alt="LOGO" class="img-responsive" width="400"></a>
	</div>
	</div>

	<div class="row">
                <div class="col s6 center-align">
                    <a href="ageChart" type="submit" class="seegraph1 waves-effect waves-light btn-large">ดูกราฟ</a>
                </div>
                <div class="col s6 center-align">
                    <a href="gradeChart" class="seegraph2 waves-effect waves-light btn-large">ดูกราฟ</a>
                </div>
            </div>
</div>
@endsection

@section('script')     
@endsection