<?php

$csvResultsFile_chrome = file('./counters/test001_results_chrome.csv');
$csvResultsFile_firefox = file('./counters/test001_results_firefox.csv');

$dataResults_chrome = [];
foreach ($csvResultsFile_chrome as $line) {
  $dataResults_chrome[] = str_getcsv($line, $delimiter = "," );              
}
$dataResults_firefox = [];
foreach ($csvResultsFile_firefox as $line) {
  $dataResults_firefox[] = str_getcsv($line, $delimiter = "," );              
}


$csvResultsFile_test002_chrome = file('./counters/test002_results_chrome.csv');
$csvResultsFile_test002_firefox = file('./counters/test002_results_firefox.csv');

$dataResults_test002_chrome = [];
foreach ($csvResultsFile_test002_chrome as $line) {
  $dataResults_test002_chrome[] = str_getcsv($line, $delimiter = "," );              
}
$dataResults_test002_firefox = [];
foreach ($csvResultsFile_test002_firefox as $line) {
  $dataResults_test002_firefox[] = str_getcsv($line, $delimiter = "," );              
}


$resultsDate = $dataResults_chrome[0][0];
$resultCode = $dataResults_chrome[0][1];
$test0001_1_chrome = $dataResults_chrome[0][3];
$test0001_2_chrome = $dataResults_chrome[0][4];
$test0001_3_chrome = $dataResults_chrome[0][5];
$test0001_4_chrome = $dataResults_chrome[0][6];
$test0001_5_chrome = $dataResults_chrome[0][7];
$test0001_6_chrome = $dataResults_chrome[0][8];
$test0001_7_chrome = $dataResults_chrome[0][9];
$test0001_8_chrome = $dataResults_chrome[0][10];
$test0001_9_chrome = $dataResults_chrome[0][11];
$test0001_10_chrome = $dataResults_chrome[0][12];

$test0001_1_firefox = $dataResults_firefox[0][3];
$test0001_2_firefox = $dataResults_firefox[0][4];
$test0001_3_firefox = $dataResults_firefox[0][5];
$test0001_4_firefox = $dataResults_firefox[0][6];
$test0001_5_firefox = $dataResults_firefox[0][7];
$test0001_6_firefox = $dataResults_firefox[0][8];
$test0001_7_firefox = $dataResults_firefox[0][9];
$test0001_8_firefox = $dataResults_firefox[0][10];
$test0001_9_firefox = $dataResults_firefox[0][11];
$test0001_10_firefox = $dataResults_firefox[0][12];


$resultsDate_test002 = $dataResults_test002_chrome[0][0];
$resultCode_test002 = $dataResults_test002_chrome[0][1];

$test0002_1_chrome = $dataResults_teste002_chrome[0][3];
$test0002_2_chrome = $dataResults_teste002_chrome[0][4];
$test0002_3_chrome = $dataResults_teste002_chrome[0][5];
$test0002_4_chrome = $dataResults_teste002_chrome[0][6];
$test0002_5_chrome = $dataResults_teste002_chrome[0][7];
$test0002_6_chrome = $dataResults_teste002_chrome[0][8];

$test0002_1_firefox = $dataResults_teste002_firefox[0][3];
$test0002_2_firefox = $dataResults_teste002_firefox[0][4];
$test0002_3_firefox = $dataResults_teste002_firefox[0][5];
$test0002_4_firefox = $dataResults_teste002_firefox[0][6];
$test0002_5_firefox = $dataResults_teste002_firefox[0][7];
$test0002_6_firefox = $dataResults_teste002_firefox[0][8];


?>

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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
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

    <iframe src="./menu.php<?php echo '?o1='.$_GET["o1"].'&o2='.$_GET["o2"]?>" frameborder="0" style="overflow: hidden; height: 100%;
        width: 100%; position: absolute;" height="100%" width="100%"></iframe>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php 
        if ($_GET["o1"]=='k') {
          echo 'KYROS Producción';
        } 
        else if ($_GET["o1"]=='c') {
          echo 'CORREOS';
        } 
        else if ($_GET["o1"]=='h') {
          echo 'HAWKEYE';
        } 
        else {
          echo '';
        }
        ?>
        <small>    
        <?php
        if ($_GET["o1"]=='k') {
          echo 'Tests funcionales';
        } 
        else {
          echo '';
        }
        ?>
        </small>
      </h1>
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        <li class="active">Hawkeye</li>
      </ol-->
    </section>

    <!-- Main content -->
    <section class="content">


     <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
        <?php if ($resultCode==0) {
          echo ('<div class="box box-success collapsed-box box-solid">');
        } else if ($resultCode==1) {
          echo ('<div class="box box-warning collapsed-box box-solid">');          
        } else {
          echo ('<div class="box box-danger collapsed-box box-solid">');                    
        }
        ?>          
            <div class="box-header with-border">
              <h3 class="box-title"><b>Test_001</b> - Operaciones de login<br><br><p style="font-size:14px"><?php echo $resultsDate ?></p></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
           
            <div class="box-body table-responsive no-padding">
            

            <div class="row">
            <div class="col-xs-12">

                 <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Chrome</th>
                  <th>Firefox</th>
                  <th>Descripción</th>
                </tr>
                <tr>
                  <td>Test001_1</td>
                   <?php if ($test0001_1_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                   <?php if ($test0001_1_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Comprobar titulo 'Kyros' en el navegador</td>
                </tr>
                <tr>
                  <td>Test001_2</td>
                   <?php if ($test0001_2_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_2_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma ruso y comprobar texto 'Забыли пароль'</td>
                </tr>               
                <tr>
                  <td>Test001_3</td>
                   <?php if ($test0001_3_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_3_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma portugués y comprobar texto 'esqueceu sua senha'</td>
                </tr>
                <tr>
                  <td>Test001_4</td>
                   <?php if ($test0001_4_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_4_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma aleman y comprobar texto 'Passwort vergessen'</td>
                </tr>
                <tr>
                  <td>Test001_5</td>
                   <?php if ($test0001_5_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_5_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma francés y comprobar texto 'votre mot de passe'</td>
                </tr>
                <tr>
                  <td>Test001_6</td>
                   <?php if ($test0001_6_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_6_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma inglés y comprobar texto 'Forgot your password'</td>
                </tr>
                <tr>
                  <td>Test001_7</td>
                   <?php if ($test0001_7_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_7_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Cambio a idioma español y comprobar texto 'Olvidó su contraseña'</td>
                </tr>
                <tr>
                  <td>Test001_8</td>
                   <?php if ($test0001_8_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_8_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Login pulsando enter en el campo usuario + logout</td>
                </tr>
                <tr>
                  <td>Test001_9</td>
                   <?php if ($test0001_9_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_9_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Login pulsando enter en el campo contraseña + logout</td>
                </tr>
                <tr>
                  <td>Test001_10</td>
                   <?php if ($test0001_10_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0001_10_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Login pulsando sobre el botón de acceder + logout</td>
                </tr>
              </table>
           
           </div>

           </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>        
      </div>

      <!-- /.row - test002 -->
      <div class="row">
        <div class="col-xs-12">
        <?php if ($resultCode==0) {
          echo ('<div class="box box-success collapsed-box box-solid">');
        } else if ($resultCode==1) {
          echo ('<div class="box box-warning collapsed-box box-solid">');          
        } else {
          echo ('<div class="box box-danger collapsed-box box-solid">');                    
        }
        ?>          
            <div class="box-header with-border">
              <h3 class="box-title"><b>Test_002</b> - Usuario de flota<br><br><p style="font-size:14px"><?php echo $resultsDate ?></p></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
           
            <div class="box-body table-responsive no-padding">
            

            <div class="row">
            <div class="col-xs-12">

                 <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Chrome</th>
                  <th>Firefox</th>
                  <th>Descripción</th>
                </tr>
                <tr>
                  <td>Test001_1</td>
                   <?php if ($test0002_1_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                   <?php if ($test0002_1_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Crear flota</td>
                </tr>
                <tr>
                  <td>Test001_2</td>
                   <?php if ($test0002_2_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0002_2_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Crear usuario de flota</td>
                </tr>               
                <tr>
                  <td>Test001_3</td>
                   <?php if ($test0002_3_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0002_3_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Login con el nuevo usuario</td>
                </tr>
                <tr>
                  <td>Test001_4</td>
                   <?php if ($test0002_4_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0002_4_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Comprobar visualización de flota</td>
                </tr>
                <tr>
                  <td>Test001_5</td>
                   <?php if ($test0002_5_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0002_5_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Eliminar usuario</td>
                </tr>
                <tr>
                  <td>Test001_6</td>
                   <?php if ($test0002_6_chrome==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>
                   <?php if ($test0002_6_firefox==0) {
                    echo ('<td><span class="label label-success">Ok</span></td>');
                  } else {
                    echo ('<td><span class="label label-danger">Error</span></td>');          
                  } 
                  ?>                 
                  <td>Eliminar flota</td>
                </tr>
               
              </table>
           
           </div>
           </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
      </div>
      <!-- /.row - test002 -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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

<!--script src="./js/highcharts.js"></script>

<script type="text/javascript">
  // Create the chart


   Highcharts.chart('container_test001', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Resultados'
    },
    subtitle: {
        text: 'Por tipo de navegador'
    },
    xAxis: {
        categories: ['Chrome', 'Firefox', 'Edge', 'Safari'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: false
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Ok',
        data: [10, 0, 0, 10]
    }, {
        name: 'Error',
        data: [0, 0, 0, 0]
    }]
});

</script-->


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
