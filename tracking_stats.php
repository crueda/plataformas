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
        width: 100%; position: absolute;"></iframe>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Estadísticas de tracking y eventos
        <small>    

        </small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

<div id="container" style="height: 280px"></div>
<div id="container2" style="height: 520px"></div>
<div id="container3" style="height: 520px"></div>
<div> 
<table border="0">
<tr>
<td><div id="container6" style="height: 350px"></div></td>
<td><div id="container4" style="height: 350px"></div></td>
<td align="left"><div id="container5" style="height: 350px"></div>
</td>
</tr>
</table>
</div>
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Número de posiciones por mes en Kyros'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Número de trackings'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:,.0f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b> trackings<br/>'
    },

    series: [{
        name: 'Mes',
        colorByPoint: true,
        data: [{
            name: '05/16',
            y: 7533184,
            drilldown: 'Mayo 2016'
        }, {
            name: '06/16',
            y: 10433139,
            drilldown: 'Junio 2016'
        }, {
            name: '07/16',
            y: 10011762,
            drilldown: 'Julio 2016'
        }, {
            name: '08/16',
            y: 10177170,
            drilldown: 'Agosto 2016'
        }, {
            name: '09/16',
            y: 10748039,
            drilldown: 'Septiembre 2016'
        }, {
            name: '10/16',
            y: 11393009,
            drilldown: 'Octubre 2016'
        }, {
            name: '11/16',
            y: 11902102,
            drilldown: 'Noviembre 2016'
        }, {
            name: '12/16',
            y: 11049988,
            drilldown: 'Diciembre 2016'
        }, {
            name: '01/17',
            y: 9365529,
            drilldown: 'Enero 2017'
        }, {
            name: '02/17',
            y: 8936243,
            drilldown: 'Febrero 2017'
        }, {
            name: '03/17',
            y: 8932990,
            drilldown: 'Marzo 2017'
        }, {
            name: '04/17',
            y: 7356874,
            drilldown: 'Abril 2017'
        }, {
            name: '05/17',
            y: 8582359,
            drilldown: 'Mayo 2017'
        }, {
            name: '06/17',
            y: 7848548,
            drilldown: 'Junio 2017'
        }, {
            name: '07/17',
            y: 6640111,
            drilldown: 'Julio 2017'
        }, {
            name: '08/17',
            y: 6188390,
            drilldown: 'Agosto 2017'
        }, {
            name: '09/17',
            y: 6467811,
            drilldown: 'Septiembre 2017'
        }, {
            name: '10/17',
            y: 6860643,
            drilldown: 'Octubre 2017'
        }

        ]
    }],
 
});

Highcharts.chart('container2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Número de posiciones por mes'
    },
    xAxis: {
        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Número de trackings'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: 'Kyros',
        data: [9365529, 8936243, 8932990, 7356874, 8582359, 7848548, 6640111, 6188390, 6467811, 6860643],
        stack: 'tracking'
    }, {
        name: 'Demos',
        data: [173145, 151432, 272744, 1085654, 232095, 356648, 362873, 411560, 241918, 301289],
        stack: 'tracking'
    }, {
        name: 'Hawkeye',
        data: [1678262, 1547549, 2069944, 1859005, 2039095, 1988308,1679978, 1915145, 1954831, 1818079],
        stack: 'tracking'
    }, {
        name: 'Correos 1',
        data: [2137390, 2076611, 2304516, 1846246, 2233172, 2244962, 2505550,2917461,2809754, 2809754],
        stack: 'tracking'
    }, {
        name: 'Correos 2',
        data: [1957136, 1870474, 2216982, 1734732, 2087210, 2059063, 2301179,2619812, 2734334,2911597],
        stack: 'tracking'
    }, {
        name: 'Correos 3',
        data: [2185789, 2044604, 2358187, 1862033, 2246849, 2234393, 2532532, 3062769, 3144308, 3274941],
        stack: 'tracking'
    }, {
        name: 'Indra',
        data: [0, 0, 0, 0, 6114, 10300, 16965, 1517, 8072, 1151],
        stack: 'tracking'
    }]
});

Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Número de eventos por mes'
    },
    xAxis: {
        categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Número de eventos de tracking y vehículo'
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [
    {
        name: 'Kyros',
        data: [654803, 645010, 638039, 547299, 588260, 583595],
        stack: 'eventos de tracking'
    }, {
        name: 'Demos',
        data: [16568, 26303, 38759, 28163, 49580, 41092],
        stack: 'eventos de tracking'
    }, {
        name: 'Hawkeye',
        data: [15015, 11312, 14444, 14704, 14506, 13846],
        stack: 'eventos de tracking'
    }, {
        name: 'Correos 1',
        data: [229997, 218949, 250128, 210956, 261147, 263930],
        stack: 'eventos de tracking'
    }, {
        name: 'Correos 2',
        data: [222854, 215379, 258050, 205201, 248313, 244770],
        stack: 'eventos de tracking'
    }, {
        name: 'Correos 3',
        data: [263858, 233745, 278812, 227047, 278012, 275274],
        stack: 'eventos de tracking'
    }, {
        name: 'Indra',
        data: [0, 0, 0, 0, 85, 61],
        stack: 'eventos de tracking'
    },

    {
        name: 'Kyros',
        data: [857783, 887523, 899012, 769510, 852183, 783770],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Demos',
        data: [17393, 14673, 22214, 11648, 23554, 36141],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Hawkeye',
        data: [144936, 133622, 157565, 168499, 184856, 186224],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Correos 1',
        data: [222972, 214769, 242445, 199604, 242842, 251195],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Correos 2',
        data: [224623, 206498, 247625, 201879, 239714, 234918],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Correos 3',
        data: [247772, 228997, 255607, 211316, 258459, 253326],
        stack: 'eventos de vehiculo'
    }, {
        name: 'Indra',
        data: [0, 0, 0, 0, 1333, 1165],
        stack: 'eventos de vehiculo'
    }]
});

Highcharts.chart('container4', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    exporting: {
        buttons: {
            contextButton: {
                enabled: false
            }
        }
    },
    title: {
        text: 'Eventos de tracking en Kyros (mes de Mayo)'
    },
    subtitle: {
        text: 'Datos por vehículo (más de 2k eventos)'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Eventos',
        data: [
        ['5175',56060],
['6038',13043],
['1867',9530],
['909',9196],
['931',8462],
['5998',7478],
['5988',7282],
['5990',7043],
['2745',5922],
['5992',5908],
['5283',5886],
['2209',5877],
['5968',5728],
['2515',5570],
['447',5340],
['3593',4894],
['2447',4360],
['4461',4244],
['2779',4099],
['2449',4092],
['801',3923],
['4739',3886],
['651',3836],
['2077',3717],
['1403',3544],
['83',3523],
['2451',3500],
['73',3465],
['2659',3465],
['2401',3367],
['2455',3279],
['5517',3276],
['1813',3235],
['1471',3209],
['5025',3161],
['795',2975],
['2759',2908],
['1333',2882],
['407',2840],
['5936',2811],
['2387',2781],
['1075',2756],
['5277',2730],
['5938',2632],
['933',2627],
['2723',2554],
['1857',2554],
['5351',2550],
['1577',2514],
['1211',2490],
['1621',2481],
['1535',2433],
['1337',2409],
['77',2380],
['2423',2380],
['2677',2284],
['2653',2262],
['5273',2234],
['5994',2220],
['2853',2212],
['2755',2205],
['3',2172],
['1871',2151],
['2529',2132],
['5923',2125],
['2327',2116],
['59',2114],
['5637',2085],


        ]
    }]
});

Highcharts.chart('container5', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    exporting: {
        buttons: {
            contextButton: {
                enabled: false
            }
        }
    },
    title: {
        text: 'Eventos de vehículo en Kyros (mes de Mayo)'
    },
    subtitle: {
        text: 'Datos por vehículo (más de 2k eventos)'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Eventos',
        data: [
       ['1025',7850],
['1733',5185],
['1729',4214],
['5553',4180],
['1731',3955],
['927',3951],
['1075',3938],
['5547',3780],
['6298',3734],
['3073',3683],
['2221',3505],
['1273',3393],
['5051',3305],
['3269',3279],
['6348',3206],
['951',3186],
['2515',3183],
['2075',2973],
['3489',2972],
['6346',2839],
['5175',2825],
['2407',2820],
['3411',2754],
['2331',2692],
['6184',2673],
['669',2653],
['1105',2493],
['2521',2434],
['2303',2413],
['5467',2396],
['6374',2343],
['6376',2343],
['2811',2273],
['1177',2266],
['5459',2230],
['495',2218],
['2449',2177],
['1503',2163],
['1893',2131],
['5',2120],
['1071',2102],
['1783',2057],
['31',2036],
['3545',2001],


        ]
    }]
});


Highcharts.chart('container6', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    exporting: {
        buttons: {
            contextButton: {
                enabled: false
            }
        }
    },
    title: {
        text: 'Tracking en Kyros (mes de Mayo)'
    },
    subtitle: {
        text: 'Datos por vehículo (25 top)'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Eventos',
        data: [
       ['5175',131569],
['3191',93391],
['6038',85536],
['5998',72976],
['5543',66238],
['5559',63735],
['6304',62769],
['5992',58430],
['5988',55889],
['6044',52338],
['6330',50446],
['5990',46732],
['5077',45198],
['3247',43790],
['5547',43279],
['5984',42574],
['1247',41771],
['6026',41268],
['6144',41211],
['1563',40753],
['6326',40680],
['5553',40468],
['1867',40366],
['6206',39836],
['6182',39422],


        ]
    }]
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
