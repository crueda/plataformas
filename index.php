<?php $url = 'index.php';
header( "refresh:60;url=$url"); 
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

<script src="./js/highcharts.js"></script>
<!--script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script-->

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<script type="text/javascript">
            var timerStart = Date.now();
            var loadingImage;

        </script>

  <script language = "JavaScript">
         function preloader() 
         {
         loadingImage = new Image(); 
         loadingImage.src = "https://admin:m0rt4d3l0@correos.kyros.es/traffic/internet-day.png";
         }
         function loader() 
         {
         document.getElementById('pic').src = loadingImage.src
          }
  </script>



</head>


<!--body class="hold-transition skin-blue sidebar-mini" onLoad="javascript:preloader()"-->
<body class="hold-transition skin-blue sidebar-mini">




<script type="text/javascript">
             $(document).ready(function() {
                 console.log("Time until DOMready: ", Date.now()-timerStart);
                 var n_day = <?php echo file_get_contents( "./counters/kyros_tracking_day.txt" ); ?>;
                 document.getElementById('kyros_tracking_day').innerHTML = n_day.toLocaleString();
                 var n_week = <?php echo file_get_contents( "./counters/kyros_tracking_week.txt" ); ?>;
                 document.getElementById('kyros_tracking_week').innerHTML = n_week.toLocaleString();

             });
             $(window).load(function() {
                 console.log("Time until everything loaded: ", Date.now()-timerStart);
             });
        </script>

<script>setTimeout(loader(),5000);</script>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="main.php" class="logo">
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

    <iframe src="./menu.php" frameborder="0" style="overflow: hidden; height: 100%;
        width: 100%; position: absolute;" height="100%" width="100%"></iframe>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Plataformas
        <small>Datos resumen</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">


<div class="row">

 <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Sesiones GPRS</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>
      <!-- /.box-header -->
           
        <div class="box-body table-responsive no-padding">

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Sesiones puerto 5000</p>
              <a href="./info.php?o1=k&o2=gprs5000"><img width="100%"  src="./graphs/graphKyrosSesiones5000.png"/></a>
            </div>
          </div>

        </div>

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Sesiones puerto 5002</p>
              <a href="./info.php?o1=k&o2=gprs5002"><img width="100%"  src="./graphs/graphKyrosSesiones5002.png"/></a>
            </div>
          </div>

        </div>

        <!-- ./col -->
        <div class="col-md-3 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b> - Sesiones puerto 5000</p>
              <a href="./info.php?o1=c&o2=gprs5000"><img width="100%"  src="./graphs/graphCorreosSesiones5000.png"/></a>
            </div>            
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-3 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b> - Sesiones puerto 5002</p>
              <a href="./info.php?o1=h&o2=gprs5002"><img width="100%" src="./graphs/graphHawkeyeSesiones5002.png"/></a>
            </div>
          </div>
        </div>
       
      </div></div></div>
      </div>
      <!-- /.row -->


<div class="row">

 <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Colas y tracking</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>
      <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">


        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Colas Strainer</p>
              <a href="./info.php?o1=k&o2=colas"><img width="100%" src="./graphs/graphKyrosColas.png"/></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Top tracking diario</p>
              <div id="container_top_tracking" style="min-width: 310px; height: 120px; max-width: 600px; margin: 0 auto"></div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Contadores tracking</p>
              
                        <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin" height="75px" >
                  
                  <tbody>
                  <tr>
                    <td><a target="_blank" href="./tracking_diario.php">Día</a></td>
                    <td><span class="label label-success" id="kyros_tracking_day"><?php 
                    echo file_get_contents( "./counters/kyros_tracking_day.txt" ); 
                    ?></span></td>
                  </tr>
                  <tr>
                    <td><a target="_blank" href="./tracking_semanal.php">Semana</a></td>
                    <td><span class="label label-warning" id="kyros_tracking_week"></span></td>
                  </tr>
                 
                 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
           
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
      
        <!-- /.col -->

            </div>
          </div>

        </div>

    </div></div></div>
       
      </div>
      <!-- /.row -->

      
      <div class="row">

 <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Sesiones Web</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>

        <div class="box-body table-responsive no-padding">

        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b></p>
              <a href="./info.php?o1=k&o2=sw"><img width="100%"  src="./graphs/graphKyrosSesiones.png"/></a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b></p>
              <a href="./info.php?o1=c&o2=sw"><img width="100%"  src="./graphs/graphCorreosSesiones.png"/></a>
            </div>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b> </p>
              <a href="./info.php?o1=h&o2=sw"><img width="100%"  src="./graphs/graphHawkeyeSesiones.png"/></a>
            </div>
          </div>
        </div>
      
      </div></div></div>
      </div>
      <!-- /.row -->
        <!--/div>
    </div>
  </div-->

      
      <div class="row">

 <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Base de datos</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>

        <div class="box-body table-responsive no-padding">

        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b>s</p>
              <a href="./info.php?o1=c&o2=bd"><img width="100%" src="./graphs/graphKyrosBD.png"/></a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b></p>
              <a href="./info.php?o1=c&o2=bd"><img width="100%" src="./graphs/graphCorreosBD.png"/></a>
            </div>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b></p>
              <a href="./info.php?o1=h&o2=bd"><img width="100%" src="./graphs/graphHawkeyeBD.png"/></a>
            </div>
          </div>
        </div>
       
      </div></div></div>
      </div>
      <!-- /.row -->

      <!--div class="row">

 <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Geocoding nominatim</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>

        <div class="box-body table-responsive no-padding">

        <div class="col-md-4">
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Peticiones</b></p>
              <a href="./info.php?o1=k&o2=geo_requests"><img width="100%" src="./graphs/graphGeocodingRequests.png"/></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Cache squid</b></p>
              <a href="./info.php?o1=k&o2=geo_squid"><img width="100%" src="./graphs/graphGeocodingHits.png"/></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Carga</b></p>
              <a href="./info.php?o1=k&o2=geo_load"><img width="100%" src="./graphs/graphGeocodingLoad.png"/></a>
            </div>
          </div>
        </div>
       
      </div></div></div>
      </div-->


      <div class="row">

      <div class="col-xs-12">
   <div class="box">
            
      <div class="box-header with-border">
              <h3 class="box-title"><b>Tráfico de red</b></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
      </div>

<div class="box-body table-responsive no-padding">

       <div class="row">

        <div class="col-md-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>UVA</b></p>
              <a href="./cpd_uva_trafico.php"><img id="pic" width="100%" src="./graphs/graphUvaRed.png"/></a>              
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-6 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Oficina</b></p>
               <a href="./cpd_oficina_trafico.php"><img width="100%" src="./graphs/graphOficinaRed.png"/></a>
            </div>
          </div>
        </div>
       
        <!-- ./col -->
        <!--div class="col-md-4 ">
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>SIT</b></p>
              <a href="./cpd_sit_trafico.php"><img width="100%" src="./graphs/graphSitRed.png"/></a>
            </div>
          </div>
        </div-->
              
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Kyros</b></p>
              <a href="./cpd_uva_trafico.php"><img id="pic" width="100%" src="./graphs/graphKyrosRed.png"/></a>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-3 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Correos</b></p>
              <a href="./cpd_oficina_trafico.php"><img width="100%" src="./graphs/graphCorreosRed.png"/></a>
            </div>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-3 ">
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Hawkeye</b></p>
              <a href="./cpd_sit_trafico.php"><img width="100%" src="./graphs/graphHawkeyeRed.png"/></a>              
            </div>
          </div>
        </div>
              
        <!-- ./col -->
        <div class="col-md-3 ">
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Indra</b></p>
              <a href="./cpd_sit_trafico.php"><img width="100%" src="./graphs/graphIndraRed.png"/></a> 
            </div>
          </div>
        </div>
      
      </div></div></div></div>       
      </div>
      <!-- /.row -->



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

<script>
Highcharts.chart('container_top_tracking', {
    chart: {
        margin: [0, 0, 0, 0],
        spacingTop: 10,
        spacingBottom: 0,
        spacingLeft: 0,
        spacingRight: 0,
        //plotBackgroundColor: '#00C0EF',
        plotBackgroundColor: '#ffffff',
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title:{
      text:''
    },
    exporting: {
         enabled: false
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            /*dataLabels: {
                enabled: false
            }*/
        }
    },
    series: [{
        name: 'Trackings',
        colorByPoint: true,
        data: [<?php
echo file_get_contents( "./counters/kyros_top_tracking.json" ); 
?>
]
    }]
});
</script>
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
