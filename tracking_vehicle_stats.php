<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kyros LBS | Plataformas</title>
  <link href='./img/kyros_v2.png' rel='shortcut icon' type='image/png'>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<script src="./highcharts.js"></script>
<script src="./highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php


$conexión = new MongoClient( "mongodb://172.26.6.50" );
$db = $conexión->selectDB('local');
$collection = new MongoCollection($db, 'TRACKING_STATS');

// buscar 
//$dataQuery = array('date' => 1503391084000);
$dataQuery = array();

$cursor = $collection->find($dataQuery);
$dataX=array();
$dataY=array();
$percentages=array();
$imeis=array();
foreach ($cursor as $doc) {
    //var_dump($doc);
    array_push($dataX, strval($doc['date']));

    foreach ($doc['vehicle_stats'] as $ele) {

      //$element = array('name' => strval($ele['imei']), 'data' => $ele['percentage']);
      //array_push($dataY, json_encode($element));
      if ($percentages[strval($ele['imei'])]==null) {
        $percentages[strval($ele['imei'])] = array();
      }
      array_push($percentages[strval($ele['imei'])], $ele['percentage']);
      if ($imeis[strval($ele['imei'])]==null) {        
        array_push($imeis, strval($ele['imei']));
      }
    }
  
}

foreach ($imeis as $imei) {
  $element = array('name' => strval($imei), 'data' => $percentages[$imei]);
  //array_push($dataY, json_encode($element));
  array_push($dataY, $element);
}

?>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>LBS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kyros</b>LBS</span>
    </a>

    <!-- BARRA SUPERIOR-->
    <?php
    $file = fopen("./nav0.php", "r");
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>

  </header>
    <!-- MENU-->



<script>
    console.log(<?= json_encode($dataY); ?>);
</script>

    <iframe src="./menu.php<?php echo '?o1='.$_GET["o1"].'&o2='.$_GET["o2"]?>" frameborder="0" style="overflow: hidden; height: 100%;
        width: 100%; position: absolute;"></iframe>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Estadísticas de tracking por vehículo
        <small>    

        </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'line',
        zoomType: 'x'
    },
    title: {
        text: 'Porcentaje de tracking de cada vehículo'
    },
    subtitle: {
        text: ''
    },
    legend: {
            enabled: false
    },
    xAxis: {
        categories: <?= json_encode($dataX); ?>,
        labels: {
                            formatter: function () {
                                var d = new Date()
                                var n = d.getTimezoneOffset();
                                var date1 = this.value;
                                var date2 = parseInt(date1)-((n/60)*3600000);
                                return Highcharts.dateFormat('%d/%m %H:%M', new Date(date2));
                            }
                        }
    },
    yAxis: {
        title: {
            text: '% de tracking'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: true
        }
    },
    series: <?= json_encode($dataY); ?>
});

</script>


   <!-- footer-->
    <?php
    $file = fopen("./footer.php", "r");
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>

    <!-- ACTIVIDAD-->
    <?php
    $file = fopen("./activity.php", "r");
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="./plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="./plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="./plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="./plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="./plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="./plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="./plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
