<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Recargar cada 60 segundos
//$secondsWait = 60;
//header("Refresh:$secondsWait");

$o = isset($_GET['o']) ? $_GET['o'] : 1;
$o1 = isset($_GET['o1']) ? $_GET['o1'] : 1;
$o2 = isset($_GET['o2']) ? $_GET['o2'] : 1;

//$url = 'menu.php?o='.$_GET["o"].'&o1='.$_GET["o1"].'&o2='.$_GET["o2"];
$url = 'menu.php?o='.$o1.'&o1='.$o2.'&o2='.$o2;
header( "refresh:60;url=$url"); 

$csvHawkeyeFile = file('./counters/hawkeye.csv');
$csvCorreosFile = file('./counters/correos.csv');
$csvCorreospreFile = file('./counters/correospre.csv');
$csvKyrospreFile = file('./counters/kyrospre.csv');
$csvMongoFile = file('./counters/mongo.csv');
$csvKyrosFile = file('./counters/kyros.csv');
$csvDemosFile = file('./counters/demos.csv');
$csvItFile = file('./counters/it.csv');
$csvIndraFile = file('./counters/indra.csv');

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
$dataMongo = [];
foreach ($csvMongoFile as $line) {
  $dataMongo[] = str_getcsv($line, $delimiter = ";" );              
}
$dataKyros = [];
foreach ($csvKyrosFile as $line) {
  $dataKyros[] = str_getcsv($line, $delimiter = ";" );              
}
$dataDemos = [];  
foreach ($csvDemosFile as $line) {
  $dataDemos[] = str_getcsv($line, $delimiter = ";" );              
}
$dataIt = [];  
foreach ($csvItFile as $line) {
  $dataIt[] = str_getcsv($line, $delimiter = ";" );              
}
$dataIndra = [];  
foreach ($csvIndraFile as $line) {
  $dataIndra[] = str_getcsv($line, $delimiter = ";" );              
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

$mongo_ok = $dataMongo[0][0];
$mongo_warning = $dataMongo[0][1]; 
$mongo_error = $dataMongo[0][2];

$kyros_ok = $dataKyros[0][0];
$kyros_warning = $dataKyros[0][1]; 
$kyros_error = $dataKyros[0][2];

$demos_ok = $dataDemos[0][0];
$demos_warning = $dataDemos[0][1]; 
$demos_error = $dataDemos[0][2];

$it_ok = $dataIt[0][0];
$it_warning = $dataIt[0][1]; 
$it_error = $dataIt[0][2];

$indra_ok = $dataIndra[0][0];
$indra_warning = $dataIndra[0][1]; 
$indra_error = $dataIndra[0][2];


$services_ok = $hawkeye_ok + $correos_ok + $correospre_ok + $kyrospre_ok + $kyros_ok  + $mongo_ok + $demos_ok + $it_ok + $indra_ok;
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

<!--link rel="stylesheet" href="./dist/css/plataformas.css"-->
  
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

        <li class="<?php if ($o=='cpd') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>CPDs</span>
              <span class="pull-right-container">
               <small class="label pull-right bg-red"><?php  if ($it_error>0) echo $it_error; ?></small>
                <small class="label pull-right bg-yellow"><?php if ($it_warning>0) echo $it_warning; ?></small>
                <small class="label pull-right bg-green"><?php echo $it_ok ?></small>
                <i class="fa fa-angle-left pull-right"></i>
              </span>

          </a>
          <ul class="treeview-menu">
            <li <?php if ($o1=='uva') echo 'class="active"' ?>>
              <a href="#"><i class="fa fa-circle-o"></i>UVA
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if ($o2=='traficouva') echo 'class="active"' ?>><a href="./cpd_uva_trafico.php" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tráfico</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="https://docs.google.com/a/deimos-space.com/spreadsheets/d/1MN-UwZkIZv5jih2hYJoftQg1jv_c6cUAib_8f8NaKDs/edit?usp=sharing" target="_blank"><i class="fa fa-circle-o"></i>IPs</a></li>
              </ul>
              <!--ul class="treeview-menu">
                <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estadocpd.php<?php echo '?o=cpd&o1=uva'.'&o2=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
              </ul-->              
            </li>
            <li <?php if ($o1=='oficina') echo 'class="active"' ?>>
              <a href="#"><i class="fa fa-circle-o"></i>Oficina
              <span class="pull-right-container">
               <small class="label pull-right bg-red"><?php  if ($it_error>0) echo $it_error; ?></small>
                <small class="label pull-right bg-yellow"><?php if ($it_warning>0) echo $it_warning; ?></small>
                <small class="label pull-right bg-green"><?php echo $it_ok ?></small>
                <i class="fa fa-angle-left pull-right"></i>
              </span>

              </a>
              <ul class="treeview-menu">
                <li <?php if ($o2=='traficooficina') echo 'class="active"' ?>><a href="./cpd_oficina_trafico.php" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tráfico</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estadocpd.php<?php echo '?o=cpd&o1=oficina'.'&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado</a></li>
              </ul>

              <ul class="treeview-menu">
                <li <?php if ($o2=='sf') echo 'class="active"' ?> ><a href="./estadocpd.php<?php echo '?o1=oficina'.'&o2=sf'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tº y humedad frontal</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($o2=='st') echo 'class="active"' ?> ><a href="./estadocpd.php<?php echo '?o1=oficina'.'&o2=st'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tº y humedad trasera</a></li>
              </ul>
              <ul class="treeview-menu">
                <li <?php if ($o2=='it') echo 'class="active"' ?> ><a href="./estadocpd.php<?php echo '?o1=oficina'.'&o2=it'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Servicios IT

                <span class="pull-right-container">
               <small class="label pull-right bg-red"><?php  if ($it_error>0) echo $it_error; ?></small>
                <small class="label pull-right bg-yellow"><?php if ($it_warning>0) echo $it_warning; ?></small>
                <small class="label pull-right bg-green"><?php echo $it_ok ?></small>
                <i class="fa fa-angle-left pull-right"></i>
              </span>

            </a>
                </li>


              </ul>
            </li>
            <li <?php if ($o1=='rally') echo 'class="active"' ?>>
              <a href="#"><i class="fa fa-circle-o"></i>Rally
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li <?php if ($o2=='traficosit') echo 'class="active"' ?>><a href="./cpd_sit_trafico.php"><i class="fa fa-circle-o" data-toggle="tooltip" title="username:nagiosadmin password:p4j4r0"></i>Tráfico SIT</a></li>
              </ul>
              <!--ul class="treeview-menu">
                <li <?php if ($o2=='traficocamionhttp') echo 'class="active"' ?>><a href="./cpd_sit_trafico_http_camion.php"><i class="fa fa-circle-o"></i>Tráfico Camión (http)</a></li>
              </ul>
              <ul class="treeview-menu">
                <li  <?php if ($o2=='traficocamionhttps') echo 'class="active"' ?>><a href="./cpd_sit_trafico_https_camion.php"><i class="fa fa-circle-o"></i>Tráfico Camión (https)</a></li>
              </ul-->
<ul class="treeview-menu">
<li><a href="http://mykyros.es/cgi-bin/nagios3/status.cgi?hostgroup=all&style=overview" target="_blank" data-toggle="tooltip" title="username:nagiosadmin password:p4j4r0"><i class="fa fa-circle-o"></i> <span>Estado</span></a></li>
</ul>                  
            </li>
          </ul>
        </li>

        <li class="<?php if ($o1=='k') echo 'active' ?> treeview">
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
           <!--li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="./mapa.php?o1=k&o2=m"><i class="fa fa-circle-o"></i>Mapa</a></li-->
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=k&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado kyros</a></li>
            <li <?php if ($o2=='e-mysql') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=k&o2=e-mysql'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado MySQL</a></li>
            <li <?php if ($o2=='e-colas') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=k&o2=e-colas'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado colas</a></li>
            <li  <?php if ($o2=='sw') echo 'class="active"' ?>><a href="./info.php<?php echo '?o1=k&o2=sw'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Sesiones Web</a></li>
            <li  <?php if ($o2=='tr') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=k&o2=tr'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tiempo de respuesta HTTPS</a></li>
            <li  <?php if ($o2=='gprs5000') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=k&o2=gprs5000'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Sesiones GPRS 5000</a></li>
            <li  <?php if ($o2=='gprs5002') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=k&o2=gprs5002'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Sesiones GPRS 5002</a></li>
            <li  <?php if ($o2=='bd') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=k&o2=bd'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>BD estadisticas</a></li>
            <li  <?php if ($o2=='tests') echo 'class="active"' ?> ><a href="./tests_result.php<?php echo '?o1=k&o2=tests'?>"><i class="fa fa-circle-o"></i>Tests funcionales</a></li>
            <li  <?php if ($o2=='backup') echo 'class="active"' ?> ><a href="./backups.php<?php echo '?o1=k&o2=backup'?>"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li  <?php if ($o2=='logs') echo 'class="active"' ?> ><a href="./logs.php<?php echo '?o1=k&o2=logs'?>" data-toggle="tooltip" title="username:kyroslbs password:p4j4r0"><i class="fa fa-circle-o"></i>Logs</a></li>
            <li  <?php if ($o2=='tracking') echo 'class="active"' ?> ><a href="./tracking_stats.php<?php echo '?o1=k&o2=tracking'?>"><i class="fa fa-circle-o"></i>Estadísticas de tracking</a></li>
            <li  <?php if ($o2=='tracking_vehicle') echo 'class="active"' ?> ><a href="./tracking_vehicle_stats.php<?php echo '?o1=k&o2=tracking_vehicle'?>"><i class="fa fa-circle-o"></i>Estadísticas de vehículo</a></li>

          </ul>
        </li>

        <li class="<?php if ($o1=='kp') echo 'active' ?>  treeview">
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
           <li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="http://@172.26.30.252/nagvis/frontend/nagvis-js/index.php?mod=Map&act=view&show=KyrosPre&header_menu=0&zoombar=1" target="_blank" data-toggle="tooltip" title="username:admin password:admin"><i class="fa fa-circle-o"></i>Mapa</a></li>
           <!--li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="./mapa.php?o1=kp&o2=m"><i class="fa fa-circle-o"></i>Mapa</a></li-->
            <li <?php if ($o2=='e') echo 'class="active"' ?> active><a href="./estado.php<?php echo '?o1=kp'.'&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>

        <li class="<?php if ($o1=='d') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Demos</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($demos_error>0) echo $demos_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($demos_warning>0) echo $demos_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $demos_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=d&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado</a></li>
            <li  <?php if ($o2=='backup') echo 'class="active"' ?> ><a href="./backups.php<?php echo '?o1=d&o2=backup'?>"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li  <?php if ($o2=='logs') echo 'class="active"' ?> ><a href="./logs.php<?php echo '?o1=d&o2=logs'?>" data-toggle="tooltip" title="username:kyroslbs password:p4j4r0"><i class="fa fa-circle-o"></i>Logs</a></li>

          </ul>
        </li>        

        <li class="<?php if ($o1=='c') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span name="correos77">Correos</span>
              <span class="pull-right-container">

              <small class="label pull-right bg-red"><?php  if ($correos_error>0) echo $correos_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($correos_warning>0) echo $correos_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $correos_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </span>
          </a>
          <ul class="treeview-menu">
           <!--li <?php if ($o2=='c') echo 'class="active"' ?> ><a href="./mapa.php?o1=c&o2=m"><i class="fa fa-circle-o"></i>Mapa</a></li-->
            <li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="http://172.26.30.252/nagvis/frontend/nagvis-js/index.php?mod=Map&act=view&show=CorreosPre&header_menu=0&zoombar=1" target="_blank" data-toggle="tooltip" title="username:admin password:admin"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=c&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado</a></li>
            <li  <?php if ($o2=='sw') echo 'class="active"' ?>><a href="./info.php<?php echo '?o1=c&o2=sw'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Sesiones Web</a></li>
            <li  <?php if ($o2=='tr') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=c&o2=tr'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tiempo de respuesta HTTPS</a></li>
            <li  <?php if ($o2=='gprs5000') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=c&o2=gprs5000'?>"><i class="fa fa-circle-o"></i>Sesiones GPRS 5000</a></li>
            <li  <?php if ($o2=='bd') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=c&o2=bd'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>BD estadisticas</a></li>
            <li  <?php if ($o2=='backup') echo 'class="active"' ?> ><a href="./backups.php<?php echo '?o1=c&o2=backup'?>"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li  <?php if ($o2=='logs') echo 'class="active"' ?> ><a href="./logs.php<?php echo '?o1=c&o2=logs'?>" data-toggle="tooltip" title="username:kyroslbs password:p4j4r0"><i class="fa fa-circle-o"></i>Logs</a></li>
            <li><a href="https://wiki.kyroslbs.com/wiki/index.php/Correos" target="_blank"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
            
          </ul>
        </li>

        <li class="<?php if ($o1=='cp') echo 'active' ?> treeview">
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
           <!--li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="./mapa.php?o1=cp&o2=m"><i class="fa fa-circle-o"></i>Mapa</a></li-->
            <li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="http://172.26.30.252/nagvis/frontend/nagvis-js/index.php?mod=Map&act=view&show=CorreosPre &header_menu=0&zoombar=1" target="_blank" data-toggle="tooltip" title="username:admin password:admin"><i class="fa fa-circle-o"></i>Mapa</a></li>
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=cp'.'&o2=e'?>"><i class="fa fa-circle-o" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"></i>Estado</a></li>
          </ul>
        </li>


        <li class=" <?php if ($o1=='h') echo 'active' ?> treeview">
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
           <li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="http://172.26.30.252/nagvis/frontend/nagvis-js/index.php?mod=Map&act=view&show=Hawkeye&header_menu=0&zoombar=1" target="_blank" data-toggle="tooltip" title="username:admin password:admin"><i class="fa fa-circle-o"></i>Mapa</a></li>
           <!--li <?php if ($o2=='m') echo 'class="active"' ?> ><a href="./mapa.php?o1=h&o2=m"><i class="fa fa-circle-o"></i>Mapa</a></li-->
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=h'.'&o2=e'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Estado</a></li>
            <li  <?php if ($o2=='sw') echo 'class="active"' ?>><a href="./info.php<?php echo '?o1=h&o2=sw'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Sesiones Web</a></li>
            <li  <?php if ($o2=='tr') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=h&o2=tr'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Tiempo de respuesta HTTPS</a></li>
            <li  <?php if ($o2=='gprs5002') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=h&o2=gprs5002'?>"><i class="fa fa-circle-o"></i>Sesiones GPRS 5002</a></li>
            <li  <?php if ($o2=='bd') echo 'class="active"' ?> ><a href="./info.php<?php echo '?o1=h&o2=bd'?>" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>BD estadisticas</a></li>
            <li  <?php if ($o2=='backup') echo 'class="active"' ?> ><a href="./backups.php<?php echo '?o1=h&o2=backup'?>"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li  <?php if ($o2=='logs') echo 'class="active"' ?> ><a href="./logs.php<?php echo '?o1=h&o2=logs'?>" data-toggle="tooltip" title="username:kyroslbs password:p4j4r0"><i class="fa fa-circle-o"></i>Logs</a></li>
            <li><a href="https://wiki.kyroslbs.com/wiki/index.php/Hawkeye" target="_blank"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
          </ul>
        </li>

        <li class="<?php if ($o1=='indra') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Indra</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($indra_error>0) echo $indra_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($indra_warning>0) echo $indra_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $indra_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado_indra.php<?php echo '?o1=indra&o2=e'?>"><i class="fa fa-circle-o"></i>Estado</a></li>
          </ul>
        </li>
        
        <li class="<?php if ($o1=='mongo') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>KyrosView</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php  if ($mongo_error>0) echo $mongo_error; ?></small>
              <small class="label pull-right bg-yellow"><?php if ($mongo_warning>0) echo $mongo_warning; ?></small>
              <small class="label pull-right bg-green"><?php echo $mongo_ok ?></small>
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='e') echo 'class="active"' ?> ><a href="./estado.php<?php echo '?o1=mongo&o2=e'?>" data-toggle="tooltip" title="username:nagiosadmin password:1ndr4"><i class="fa fa-circle-o"></i>Estado</a></li>
            <li  <?php if ($o2=='stats') echo 'class="active"' ?> ><a href="./mongo_stats.php<?php echo '?o1=mongo&o2=stats'?>"><i class="fa fa-circle-o"></i>Estadísticas</a></li>
          </ul>
        </li>


        <li class="<?php if ($o1=='api') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Kyros API</span>
              <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php
              $xml=simplexml_load_file("./counters/test-api-report.xml");
              $api_errors = $xml->testsuite[0]['errors'];
              $api_failures = $xml->testsuite[0]['skipped'];
              $api_ok = $xml->testsuite[0]['tests'];
              if ($api_errors!='0') echo $api_errors;
              ?></small>
              <small class="label pull-right bg-yellow"><?php
              if ($api_failures!='0') echo $api_failures;
              ?></small>
              <small class="label pull-right bg-blue"><?php
              echo $api_ok;
              ?></small>


              <i class="fa fa-angle-left pull-right"></i>



            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='test') echo 'class="active"' ?> ><a href="./test.php?o1=api&o2=test'"><i class="fa fa-circle-o"></i>Tests</a></li>
            <li  <?php if ($o2=='logs') echo 'class="active"' ?> ><a href="./logs.php<?php echo '?o1=api&o2=logs'?>" data-toggle="tooltip" title="username:kyroslbs password:p4j4r0"><i class="fa fa-circle-o"></i>Logs de accesos</a></li>
            <li><a href="https://<?php
    $file = fopen('./credentials/user_plataformas.txt', 'r');
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>:<?php
    $file = fopen('./credentials/pass_plataformas.txt', 'r');
    while(!feof($file)) {
    echo fgets($file);
    }
    ?>@api-doc.kyroslbs.com/" target="_blank"><i class="fa fa-book"></i> <span>Documentación</span></a></li>
          </ul>
        </li>



        
        <li <?php if ($o1=='incidencias') echo 'class="active"' ?>>
          <a href="./incidencias.php">
            <i class="fa fa-edit"></i> <span>Incidencias</span>
          </a>
        </li>

        <li <?php if ($o1=='calendario') echo 'class="active"' ?>>
          <a href="./calendario.php">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
          </a>
        </li>

        <li <?php if ($o1=='urls') echo 'class="active"' ?>>
          <a href="./urls.php">
            <i class="fa fa-laptop"></i> <span>URLs</span>
          </a>
        </li>
        
        <!--li <?php if ($o1=='credenciales') echo 'class="active"' ?>>
          <a href="./credenciales.php">
            <i class="fa fa-edit"></i> <span>Credenciales</span>
          </a>
        </li-->
        
       
        
        <li><a href="https://wiki.kyroslbs.com" target="_blank"><i class="fa fa-book"></i> <span>Documentación</span></a></li>


          <li class="<?php if ($o1=='mail') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Servidor de email</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='envios') echo 'class="active"' ?> ><a href="./servidor_correo.php?o1=mail&o2=envios" data-toggle="tooltip" title="username:admin password:m0rt4d3l0"><i class="fa fa-circle-o"></i>Envíos</a></li>
            <li <?php if ($o2=='stats') echo 'class="active"' ?> ><a href="./servidor_correo_stats.php<?php echo '?o1=mail&o2=stats'?>"><i class="fa fa-circle-o"></i>Estadísticas</a></li>
          </ul>
        </li>

        <!--li class="<?php if ($o1=='carto') echo 'active' ?> treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Ejemplos Carto</span>
              <span class="pull-right-container">
              

            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($o2=='posiciones1dia') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=posiciones1dia"><i class="fa fa-circle-o"></i>Tracking 1 día</a></li>
            <li <?php if ($o2=='torque10dias') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=torque10dias"><i class="fa fa-circle-o"></i>Tracking de 5 días</a></li>
            <li <?php if ($o2=='provincias') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=provincias"><i class="fa fa-circle-o"></i>Tracking en provincias</a></li>
            <li <?php if ($o2=='municipios') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=municipios"><i class="fa fa-circle-o"></i>Tracking en municipios</a></li>
            <li <?php if ($o2=='pois_provincias') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=pois_provincias"><i class="fa fa-circle-o"></i>POIs provincias</a></li>
            <li <?php if ($o2=='influencia') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=influencia"><i class="fa fa-circle-o"></i>Áreas de influencia</a></li>
            <li <?php if ($o2=='cercania_pois') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=cercania_pois"><i class="fa fa-circle-o"></i>Cercanía a POIs</a></li>
            <li <?php if ($o2=='wrc1') echo 'class="active"' ?> ><a href="./carto.php?o1=carto&o2=wrc1"><i class="fa fa-circle-o"></i>WRC compara velocidades</a></li>
          </ul>
        </li-->

        <!--li>
          <a href="./servidor_correo.php">
            <i class="fa fa-envelope"></i> <span>Servidor de email</span>
          </a>
        </li-->

        <li class="header">Herramientas</li>
        <li><a href="https://files.kyroslbs.com/downloads" target="_blank" data-toggle="tooltip" title="username:lbs password:01lbs10"><i class="fa fa-circle-o text-blue"></i> <span>Repositorio Apps</span></a></li>
        <li><a href="https://jira.kyroslbs.com" target="_blank"><i class="fa fa-circle-o text-red"></i> <span>Jira</span></a></li>
        <li><a href="https://cloud.kyroslbs.com" target="_blank"><i class="fa fa-circle-o text-yellow"></i> <span>Cloud</span></a></li>
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