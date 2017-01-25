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
        if ($_GET["o1"]=='h') {
          echo 'HAWKEYE';
        } 
        else if ($_GET["o1"]=='cp') {
          echo 'CORREOS Pre-producción';
        } 
        else if ($_GET["o1"]=='k') {
          echo 'KYROS Producción';
        } 
        else if ($_GET["o1"]=='c') {
          echo 'CORREOS Producción';
        } 
        else if ($_GET["o1"]=='s') {
          echo 'SUMO Producción';
        } 
        else if ($_GET["o1"]=='s') {
          echo 'WRC Producción';
        } 
        else if ($_GET["o1"]=='kp') {
          echo 'KYROS Pre-producción';
        } 
        else if ($_GET["o1"]=='oficina') {
          echo 'CPD oficina';
        } 
        else if ($_GET["o1"]=='sf') {
          echo 'Sensor frontal';
        } 
        else if ($_GET["o1"]=='st') {
          echo 'Sensor trasero';
        } 
        else if ($_GET["o1"]=='d') {
          echo 'DEMOS';
        } 
        else {
          echo '';
        }
        ?>
        <small>    
        Estado de máquinas y servicios
        </small>
      </h1>
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        <li class="active">Hawkeye</li>
      </ol-->
    </section>

    <!-- Main content -->
    <section class="content">

<iframe src="https://<?php
    $file = fopen('./credentials/user_nagios.txt', 'r');
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>:<?php
    $file = fopen('./credentials/pass_nagios.txt', 'r');
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>@<?php 
      if ($_GET["o1"]=='h') {
        echo 'hawkeye.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=Hawkeye-production&style=overview';
      } 
      else if ($_GET["o1"]=='cp') {
        echo 'hawkeye.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=CORREOS-Pre-production&style=overview';
      } 
      else if ($_GET["o1"]=='kp') {
        echo 'hawkeye.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=KYROS-Pre-production&style=overview';
      } 
      else if ($_GET["o1"]=='k') {
        echo 'kyros.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=KYROS-Production&style=overview';
      } 
      else if ($_GET["o1"]=='d') {
        echo 'kyros.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=KYROS-Demos&style=detail';
      } 
      else if ($_GET["o1"]=='s') {
        echo 'kyros.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=SUMO-Production&style=overview';
      } 
      else if ($_GET["o1"]=='c') {
        echo 'correos.kyroslbs.com/nagios3';
      } 
      else if ($_GET["o1"]=='uva') {
        echo 'correos.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=all&style=overview';
      } 
      else if ($_GET["o1"]=='oficina') {
        echo 'hawkeye.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=all&style=overview';
      } 
      else if ($_GET["o1"]=='sf') {
        echo 'hawkeye.kyroslbs.com/pnp4nagios/index.php/graph?host=raspberry&srv=Sensor-frontal';
      } 
      else if ($_GET["o1"]=='st') {
        echo 'hawkeye.kyroslbs.com/pnp4nagios/index.php/graph?host=raspberry&srv=Sensor-trasero';
      } 
      else {
        echo 'hawkeye.kyroslbs.com/cgi-bin/nagios3/status.cgi?hostgroup=all';
      }?>" frameborder="0" style="overflow: hidden; height: 100%;
        width: 100%; position: absolute;" height="100%" width="100%"></iframe>


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
