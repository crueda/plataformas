<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Recargar cada 60 segundos
$secondsWait = 60;
header("Refresh:$secondsWait");


$csvHawkeyeFile = file('./data/counters/hawkeye.csv');
$csvCorreosFile = file('./data/counters/correos.csv');
$csvCorreospreFile = file('./data/counters/correospre.csv');
$csvKyrospreFile = file('./data/counters/kyrospre.csv');
$csvSumoFile = file('./data/counters/sumo.csv');
$csvKyrosFile = file('./data/counters/kyros.csv');

$dataHawkeye = [];
foreach ($csvHawkeyeFile as $line) {
  $dataHawkeye[] = str_getcsv($line, $delimiter = ";" );              
}
$dataCorreos = [];
foreach ($csvCorreosFile as $line) {
  $dataCorreos[] = str_getcsv($line, $delimiter = ";" );              
}
$dataCorreospre = [];
foreach ($csvCorreospreFile as $line) {
  $dataCorreospre[] = str_getcsv($line, $delimiter = ";" );              
}
$dataKyrospre = [];
foreach ($csvKyrospreFile as $line) {
  $dataKyrospre[] = str_getcsv($line, $delimiter = ";" );              
}
$dataSumo = [];
foreach ($csvSumoFile as $line) {
  $dataSumo[] = str_getcsv($line, $delimiter = ";" );              
}
$dataKyros = [];
foreach ($csvKyrosFile as $line) {
  $dataKyros[] = str_getcsv($line, $delimiter = ";" );              
}

$hawkeye_ok = $dataHawkeye[0][0];
$hawkeye_warning = $dataHawkeye[0][1]; 
$hawkeye_error = $dataHawkeye[0][2];

$correos_ok = $dataCorreos[0][0];
$correos_warning = $dataCorreos[0][1]; 
$correos_error = $dataCorreos[0][2];

$correospre_ok = $dataCorreospre[0][0];
$correospre_warning = $dataCorreospre[0][1]; 
$correospre_error = $dataCorreospre[0][2];

$kyrospre_ok = $dataKyrospre[0][0];
$kyrospre_warning = $dataKyrospre[0][1]; 
$kyrospre_error = $dataKyrospre[0][2];

$sumo_ok = $dataSumo[0][0];
$sumo_warning = $dataSumo[0][1]; 
$sumo_error = $dataSumo[0][2];

$kyros_ok = $dataKyros[0][0];
$kyros_warning = $dataKyros[0][1]; 
$kyros_error = $dataKyros[0][2];


$services_ok = $hawkeye_ok + $correos_ok + $correospre_ok + $kyrospre_ok + $kyros_ok  + $sumo_ok;
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <base target="_parent" />
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
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
            <!-- search form -->
      <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="./img/kyros_v2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Menú principal</p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $services_ok ?> servicios Ok</a>
        </div>
      </div>

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!--li class="header">Menú principal</li-->

<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>CPDs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>UVA
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="./cpd_uva_trafico.php"><i class="fa fa-circle-o"></i>Tráfico</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="https://drive.google.com/a/deimos-space.com/file/d/0B6b11tK_Z5aSZlNEa2lNMk5XQU0/edit" target="_blank"><i class="fa fa-circle-o"></i>IPs</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=uva'.'&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
              </ul>              
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Oficina
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="./cpd_oficina_trafico.php"><i class="fa fa-circle-o"></i>Tráfico</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=oficina'.'&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
              </ul>

              <ul class="treeview-menu">
                <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=sf'.'&02=e'?>"><i class="fa fa-circle-o"></i>Sensor frontal</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=st'.'&02=e'?>"><i class="fa fa-circle-o"></i>Sensor trasero</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Rally
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="./cpd_sit_trafico.php"><i class="fa fa-circle-o"></i>Tráfico SIT</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="./cpd_sit_trafico_http_camion.php"><i class="fa fa-circle-o"></i>Tráfico Camión (http)</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="./cpd_sit_trafico_https_camion.php"><i class="fa fa-circle-o"></i>Tráfico Camión (https)</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="<?php if ($_GET["o1"]=='k') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kyros</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($kyros_error>0) echo $kyros_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($kyros_warning>0) echo $kyros_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $kyros_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./kyros_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./kyros_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li><a href="./estado.php<?php echo '?o1=k&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class="<?php if ($_GET["o1"]=='kp') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kyros Pre</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($kyrospre_error>0) echo $kyrospre_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($kyrospre_warning>0) echo $kyrospre_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $kyrospre_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./kyrospre_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./kyrospre_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=kp'.'&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class="<?php if ($_GET["o1"]=='c') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Correos</span>
              <span class="pull-right-container">

              <small class="label pull-right bg-red"><?php  if ($correos_error>0) echo $correos_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($correos_warning>0) echo $correos_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $correos_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./correos_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./correos_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li><a href="./estado.php<?php echo '?o1=s&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class="<?php if ($_GET["o1"]=='cp') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Correos Pre</span>

            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($correospre_error>0) echo $correospre_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($correospre_warning>0) echo $correospre_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $correospre_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>

          </a>
          <ul class="treeview-menu">
            <li><a href="./correospre_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./correospre_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=cp'.'&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class=" <?php if ($_GET["o1"]=='w') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>WRC</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./wrc_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./wrc_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li><a href="./estadosit.php<?php echo '?o1=w&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class=" <?php if ($_GET["o1"]=='h') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Hawkeye</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($hawkeye_error>0) echo $hawkeye_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($hawkeye_warning>0) echo $hawkeye_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $hawkeye_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./mapa.php<?php echo '?o1=h'.'&02=m'?>"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li <?php if ($_GET["o2"]=='u') echo 'class="active"' ?> ><a href="./hawkeye_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <!--li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./hawkeye_estado.php"><i class="fa fa-circle-o"></i>Estado</a></li-->
            <li <?php if ($_GET["o2"]=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=h'.'&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class="<?php if ($_GET["o1"]=='s') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>SUMO</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($sumo_error>0) echo $sumo_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($sumo_warning>0) echo $sumo_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $sumo_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./sumo_map.php"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li><a href="./sumo_urls.php"><i class="fa fa-circle-o"></i>URLs</a></li>
            <li><a href="./estado.php<?php echo '?o1=s&02=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>


        <li>
          <a href="./otros/calendario.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
          </a>
        </li>
        
       
        
        <li><a href="https://wiki.kyroslbs.com"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
        <li class="header">Herramientas</li>
        <li><a href="https://jira.kyroslbs.com"><i class="fa fa-circle-o text-red"></i> <span>Jira</span></a></li>
        <li><a href="https://cloud.kyroslbs.com"><i class="fa fa-circle-o text-yellow"></i> <span>Cloud</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

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