<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Kyros LBS | Plataformas</title>
  <link href='./img/kyros_v2.png' rel='shortcut icon' type='image/png'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <script src="./js/highcharts.js"></script>


</head>
<!--body class="hold-transition skin-blue sidebar-mini" onLoad="javascript:preloader()"-->
<body class="hold-transition skin-blue sidebar-mini">


<div id="container" style="min-width: 310px; height: 800px; margin: 0 auto"></div>

<script type="text/javascript">
	
	Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Puntos de tracking procesados en la semana actual'
    },
    subtitle: {
        text: ''
    },
    exporting: {
         enabled: false
    },
    xAxis: {
        categories: [<?php
echo file_get_contents( "./counters/kyros_trackings_semanal_x_axis.csv" ); 
?>],
labels: {
                            formatter: function () {
                                var d = new Date()
                                var n = d.getTimezoneOffset();
                                var date1 = this.value;
                                var date2 = parseInt(date1)-((n/60)*3600000);
                                return Highcharts.dateFormat('%H:%M', new Date(date2));
                            }
                        }
    },
    yAxis: {
        title: {
            text: 'Puntos de tracking'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Trackings',
        data: [<?php
echo file_get_contents( "./counters/kyros_trackings_semanal_y_axis.csv" ); 
?>]
    }]
});

</script>
</body>
</html>
