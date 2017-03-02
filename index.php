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
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Sesiones GPRS 5000</p>
              <img width="100%" src="https://admin:m0rt4d3l0@kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5000_sessions&view=0&source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=k&o2=gprs5000" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        </div>

        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Sesiones GPRS 5002</p>
              <img width="100%" src="https://admin:m0rt4d3l0@kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5002_sessions&view=0&source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=k&o2=gprs5002" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>

        </div>

        <!-- ./col -->
        <div class="col-md-3 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b> - Sesiones GPRS 5000</p>
              <img width="100%" src="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&srv=GPRS_5000_sessions&view=0&source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>            
            <a href="./info.php?o1=c&o2=gprs5000" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-3 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b> - Sesiones GPRS 5002</p>
              <img width="100%" src="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=hawkeye-dmz-proxy&srv=GPRS_5002_sessions&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=h&o2=gprs5002" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
      </div>
      <!-- /.row -->


  <!--div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Sesiones Web</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive"-->
      
      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Sesiones Web</p>
              <img width="100%" src="https://admin:m0rt4d3l0@kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&amp;srv=https_sessions&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=k&o2=sw" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b> - Sesiones Web</p>
              <img width="100%" src="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=dmz-proxy-Virtual&amp;srv=https_sessions&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=c&o2=sw" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b> - Sesiones Web</p>
              <img width="100%" src="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=hawkeye-dmz-proxy&amp;srv=https_sessions&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=h&o2=sw" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
        <!--/div>
    </div>
  </div-->

      
      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <p><b>Kyros</b> - Base de datos</p>
              <img width="100%" src="https://admin:m0rt4d3l0@kyros.es/pnp4nagios/image?host=DB-stats&srv=Queries_average&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=c&o2=bd" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <p><b>Correos</b> - Base de datos</p>
              <img width="100%" src="https://admin:m0rt4d3l0@correos.kyros.es/pnp4nagios/image?host=DB-stats&srv=Queries_average&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=c&o2=bd" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><b>Hawkeye</b> - Base de datos</p>
              <img width="100%" src="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/pnp4nagios/image?host=DB-stats&srv=Queries_average&amp;view=0&amp;source=0&amp;start=<?php echo time()-7800 ?>&amp;end=<?php echo time() ?>"/>
            </div>
            <a href="./info.php?o1=h&o2=bd" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>UVA</b> - Tráfico de red</p>
              <img width="100%" src="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/mrtg/89.140.174.193_1-day.png"/>

            </div>
            <a href="./cpd_oficina_trafico.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>Oficina</b> - Tráfico de red</p>
              <img width="100%" src="https://admin:m0rt4d3l0@hawkeye.kyroslbs.com/mrtg/89.140.174.193_1-day.png"/>
            </div>
            <a href="./cpd_oficina_trafico.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <p><b>SIT</b> - Tráfico de red</p>
              <img width="100%" src="http://nagiosadmin:p4j4r0@mykyros.es/traffic/192.168.24.1_3-day.png"/>              
            </div>
            <a href="./cpd_sit_trafico.php" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       

       
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
