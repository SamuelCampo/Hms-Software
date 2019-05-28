<? header('Content-Type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Sistema de Información Integral en Salud HMS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Sistema de Información Integral en Salud HMS" >
    <meta name="copyright" content="Construyendo Web 2014" >
    <meta charset='iso-8859-1' />
    
    <!-- bootstrap 3.0.2 -->
    <link href="<?=base_url('Util/AdminLTE-master/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- date picker -->
    <link href="<?=base_url('Util/AdminLTE-master/css/datepicker.css')?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?=base_url('Util/AdminLTE-master/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=base_url('Util/AdminLTE-master/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('Util/AdminLTE-master/css/AdminLTE.css')?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?=base_url('Util/AdminLTE-master/js/html5shiv.js')?>" type="text/javascript"></script>
      <script src="<?=base_url('Util/AdminLTE-master/js/respond.min.js')?>" type="text/javascript"></script>
    <![endif]-->
    
    <!-- jQuery 2.1.0 -->
    <script src="<?=base_url('Util/js/jquery-2.1.0.min.js')?>"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="<?=base_url('Util/AdminLTE-master/js/jquery-ui-1.10.3.min.js')?>" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('Util/AdminLTE-master/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('Util/AdminLTE-master/js/AdminLTE/app.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('Util/AdminLTE-master/js/bootstrap-datetimepicker.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('Util/AdminLTE-master/js/bootstrap-datetimepicker.es.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('Util/AdminLTE-master/js/bootstrap-filestyle.min.js')?>" type="text/javascript"></script>
    
    <link href="<?=base_url('Util/css/ps.css')?>" rel="stylesheet" type="text/css" >
  </head>
  <body class="skin-black">
    <?=$contenido?>
  </body>  
</html>