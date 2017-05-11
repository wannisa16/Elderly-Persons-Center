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
    <a href="{{ url('/elderlygraph') }}" class="waves-effect waves-light btn-large">ย้อนกลับ</a>
    <div class="chart"></div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var A = {{ $total['A'] }}
        var B = {{ $total['B'] }}
        var C = {{ $total['C'] }}
        var D = {{ $total['D'] }}

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['A : ทำงานได้', A],
          ['B : ช่วยเหลือตนเองและผู้อื่นได้', B],
          ['C : ช่วยเหลือตนเองได้เท่านั้น',  C],
          ['D : ช่วยเหลือตนเองไม่ได้', D]
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