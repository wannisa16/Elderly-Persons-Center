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
		<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'จำนวนผู้สูงอายุแต่ละประเภท',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
@endsection