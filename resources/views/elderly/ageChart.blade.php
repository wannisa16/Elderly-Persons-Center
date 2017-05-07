@extends('elderly.template')

@section('title')
กราฟแสดงจำนวนผู้สูงอายุต่อเพศ
@endsection

@section('link')
<link href="{{ URL::asset('elderly/css/ageChart.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('band')
@endsection

@section('content')
    <div class="container">
        <div class="chart"></div>
        <div  id="columnchart_material" style="width: 800px; height: 500px;"></div>
        <div class="chart"></div>
        <a class="waves-effect waves-light btn-large">ย้อนกลับ</a>
        <div class="chart"></div>
    </div>
@endsection


@section('footer')
@endsection

@section('script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
    
      function drawChart() {
        var m6 = {{ $total['6male']}}
        var f6 = {{ $total['6female']}}
        var m7 = {{ $total['7male']}}
        var f7 = {{ $total['7female']}}
        var m8 = {{ $total['8male']}}
        var f8 = {{ $total['8female']}}
        var m9 = {{ $total['9male']}}
        var f9 = {{ $total['9female']}}

        var data = google.visualization.arrayToDataTable([
          ['อายุ', 'เพศชาย', 'เพศหญิง'],
          ['60-69',m6 ,f6],
          ['70-79', m7, f7],
          ['80-89', m8, f8],
          ['90 ขึ้นไป', m9, f9]
        ]);

        var options = {
          chart: {
            title: 'กราฟแสดงจำนวนผู้สูงอายุ',
            subtitle: 'เปรียบเทียบจำนวนผู้สูงอายุในแต่ละช่วงอายุและเพศ',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
</script>
@endsection
