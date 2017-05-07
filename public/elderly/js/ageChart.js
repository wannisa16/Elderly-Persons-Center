$(document).ready(function(){
     google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var a = {{ count($total)}}
        var data = google.visualization.arrayToDataTable([
          ['อายุ', 'เพศชาย', 'เพศหญิง'],
          ['60-69', a,0],
          ['70-79', 1170, 460],
          ['80-89', 660, 1120],
          ['90 ขึ้นไป', 1030, 540]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

  });


     