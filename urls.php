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
        width: 100%; position: absolute;"></iframe>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        URLs
        <small>Direcciones de acceso a las diferentes plataformas</small>
      </h1>
      <!--ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Menú</a></li>
        <li class="active">Hawkeye</li>
      </ol-->
    </section>

    <!-- Main content -->
    <section class="content">


<!-- KYROS -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Kyros</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="25%">URL</th>
              <th  width="65%">Descriptión</th>
              <th  width="10%">Estado</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><a href="https://kyros.es">kyros.es</a>
                <!--br><a href="http://kyros.kyroslbs.com">kyros.kyroslbs.com</a-->
                </td>
                    <td>Entorno de producción</td>
                    <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://kyros.kyroslbs.com">kyros.kyroslbs.com</a>
                </td>
                <td>Entorno de producción (acceso alternativo)</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://pre.kyroslbs.com">pre.kyroslbs.com</a></td>
                    <td>Entorno de pre-producción</td>
                    <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://demos.kyroslbs.com">demos.kyroslbs.com</a></td>
                    <td>Entorno de demos</td>
                    <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://view.kyroslbs.com">view.kyroslbs.com</a></td>
                    <td>Kyros View</td>
                    <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://api.kyroslbs.com">api.kyroslbs.com</a></td>
                    <td>Kyros API REST</td>
                    <td><span class="label label-success">Ok</span></td>
              </tr>
                                                     
              </tbody>
          </table>
        </div>
    </div>
  </div>
        
<!-- CORREOS -->
  <div class="box box-info collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">Correos</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="25%">URL</th>
              <th  width="65%">Descriptión</th>
              <th  width="10%">Estado</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><a href="https://correos.kyros.es">correos.kyros.es</a>
                </td>
                <td>Entorno de producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://correos.kyroslbs.com">correos.kyroslbs.com</a>
                </td>
                <td>Entorno de producción (acceso alternativo)</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="https://correos-pre.kyroslbs.com">correos-pre.kyroslbs.com</a>
                </td>
                <td>Entorno de pre-producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
                                                     
              </tbody>
          </table>
        </div>
    </div>
  </div>

<!-- HAWKEYE -->
          <div class="box box-info collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Hawkeye</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                <!--button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button-->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th width="25%">URL</th>
                    <th  width="65%">Descriptión</th>
                    <th  width="10%">Estado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="http://hawkeye.kyroslbs.com">hawkeye.kyroslbs.com</a></td>
                    <td>Entorno de producción</td>
                    <td><span class="label label-success">Ok</span></td>
                  </tr>
                 
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!--div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div-->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        
        <!-- /.col -->

<!-- OYSTA -->
  <div class="box box-info collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">OYSTA</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="25%">URL</th>
              <th  width="65%">Descriptión</th>
              <th  width="10%">Estado</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><a href="http://oysta.kyroslbs.com">oysta.kyroslbs.com</a>
                </td>
                <td>Entorno de producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>                                                     
              </tbody>
          </table>
        </div>
    </div>
  </div>

<!-- SUMO -->
  <div class="box box-info collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">SUMO</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="25%">URL</th>
              <th  width="65%">Descriptión</th>
              <th  width="10%">Estado</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><a href="http://sumo.kyroslbs.com">sumo.kyroslbs.com</a>
                </td>
                <td>Entorno de producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="http://sumopre.kyroslbs.com">sumopre.kyroslbs.com</a>
                </td>
                <td>Entorno de pre-producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
                                                     
              </tbody>
          </table>
        </div>
    </div>
  </div>

<!-- SUMO -->
  <div class="box box-info collapsed-box">
    <div class="box-header with-border">
      <h3 class="box-title">WRC</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
        </button>
      </div>
    </div>

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th width="25%">URL</th>
              <th  width="65%">Descriptión</th>
              <th  width="10%">Estado</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><a href="http://mykyros.es">mykyros.es</a>
                </td>
                <td>Entorno de producción</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="http://race-control.mykyros.es">race-control.mykyros.es</a>
                </td>
                <td>Entorno de administración (va a FIA3)</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="http://pimuc.mykyros.es">view.mykyros.es</a>
                </td>
                <td>Entorno con Kyros View</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
              <tr>
                <td><a href="http://pimuc.mykyros.es">pimuc.mykyros.es</a>
                </td>
                <td>Acceso para Pimuc (solo permitido al servlet de posiciones)</td>
                <td><span class="label label-success">Ok</span></td>
              </tr>
                                                     
              </tbody>
          </table>
        </div>
    </div>
  </div>


</div>

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
