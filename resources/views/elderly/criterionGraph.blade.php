@extends('elderly/template')
@section('title')
กราฟแบ่งตามเกณฑ์
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/criteriongraph.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
	<div class="container">
		<div class="criteriongraph z-depth-2 center-align"><h4>กราฟแบ่งตามเกณฑ์</h4></div>
	</div>
@endsection

@section('script')
@endsection