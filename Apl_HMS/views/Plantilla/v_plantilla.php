<? header('Content-Type: text/html; charset=iso-8859-1');?>
<?
  //var_dump($this->Modulo->usr->su_t0);
  //var_dump($this->Modulo->usr->personal->cargo_t10); exit;
  //var_dump(strpos($this->Modulo->modulos,'ADMIN'));
  //var_dump($this->Modulo->usr->identificacion_t0);
  //var_dump($this->Modulo->usr->nombre_t0);
  //var_dump($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6);
  //exit;
            foreach ($this->Modulo->usr as $fila => $value) {
               foreach ($value->especialidades as $key) {
                 $especialidad =  $key->idps_especialidades_t9;
               }
             } 
?>
<!DOCTYPE html>
<html lang="es" ng-app="">
  <head>
    <title>Sistema de Información Integral en Salud HMS</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Sistema de Información Integral en Salud HMS" >
    <meta name="copyright" content="Construyendo Web 2014" >
    <meta charset='iso-8859-1' />
    <link href="https://fonts.googleapis.com/css?family=B612" rel="stylesheet">
    <!-- bootstrap 3.0.2 -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- JQuery UI 1.10.3 -->
    <link href="<?=$this->Modulo->base_url('Util/jquery_ui_1_11_4/jquery-ui.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/morris/morris.css')?>" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/jvectormap/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/daterangepicker/daterangepicker-bs3.css')?>" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=$this->Modulo->base_url('Util/AdminLTE-master/css/AdminLTE.css')?>" rel="stylesheet" type="text/css" />
    <!-- FullCalendar -->
    <link href="<?=$this->Modulo->base_url('Util/Fullcalendar/fullcalendar.css')?>" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Switch -->
    <link href="<?=$this->Modulo->base_url('Util/bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css')?>" rel="stylesheet" type="text/css" />
    
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?=$this->Modulo->base_url('Util/flatpickr-master/dist/flatpickr.css')?>" >
    <link rel="stylesheet" href="<?=$this->Modulo->base_url('Util/flatpickr-master/dist/themes/material_blue.css')?>" >
    <link rel="stylesheet" href="<?=$this->Modulo->base_url('Util/alertifyjs/css/alertify.min.css')?>" >
    <link rel="stylesheet" href="<?=$this->Modulo->base_url('Util/alertifyjs/css/alertify.rtl.min.css')?>" >
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/html5shiv.js')?>" type="text/javascript"></script>
      <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/respond.min.js')?>" type="text/javascript"></script>
    <![endif]-->
    
   <!-- Estilo de las Alertas Alertify -->
   <link href="<?=$this->Modulo->base_url('Util/alertify/theme/semantic.css')?>" rel="stylesheet" type="text/css" > 
    <link href="<?=$this->Modulo->base_url('Util/css/hms.css')?>" rel="stylesheet" type="text/css" >
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
      var Ps_Urlbase='<?=$this->Modulo->base_url();?>';
      var Ps_Url='<?=site_url();?>';
      
      function inicializa_xhr() {
        if (window.XMLHttpRequest) {
          return new XMLHttpRequest();
        } else {
          return new ActiveXObject("Microsoft.XMLHTTP");
        }
      }
    </script>
    <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5EmEgshddJBTexSso1WmfJor9bXUd1F7";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
  </head>
  <body class="skin-black">
    <header class="header" style="background-color:#1565c0 ">
      <a href="" class="logo">
        HMS
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a href="<?=$this->agent->referrer()?>" class="navbar-btn sidebar-toggle btn-default" role="button">
          <i class="fa fa-mail-reply"></i>
        </a>
        <a href="#" class="navbar-btn sidebar-toggle btn-default" role="button">
          <strong>
            <?=date("Y-m-d H:i")?> || <?=mb_convert_case($this->Modulo->usr->nombre,MB_CASE_UPPER,"ISO-8859-1");?>
            <?php if ($this->db->database == "hms_ERGOVIDA"): ?>
              FISIOTERAPEUTA
              <?php else: ?>
              <?=mb_convert_case($this->Modulo->usr->personal->cargo_t10,MB_CASE_UPPER,"ISO-8859-1");?>
            <?php endif ?>
          </strong>
        </a>
      </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
      <aside class="left-side sidebar-offcanvas">
        <?if(strpos($this->Modulo->usr->roles["rolprinc"]->cod_rol_t6, "EXT")!==false){?>
          <?=$this->load->view('Plantilla/v_menu_'.$this->Modulo->usr->roles["rolprinc"]->cod_rol_t6,"",true)?>
        <?}else{?>
          <section class="sidebar">
            <ul class="sidebar-menu">
              <li>
                <a href="<?=$this->agent->referrer()?>">
                  <i class="glyphicon glyphicon-map-marker"></i>
                  <?=$tit_seccion?>
                </a>
              </li>
              <?if(HMSConfEstadoCont=='ACTIVO'){?>
                <?php //var_dump($this->Modulo->modulos); ?>
                <?if(!empty($v_plant_menuad))echo $v_plant_menuad;?>
                <?if(defined('HMSConfMenu')){$this->load->view('Plantilla/v_menu_'.HMSConfMenu,"","Refresh");}else{?>
                  <?if($this->Modulo->usr->su_t0=='SI'){$this->load->view('Plantilla/v_menu_admon',"","Refresh");}?>
                  <?if(strpos($this->Modulo->modulos,'ASIST')!==false){$this->load->view('Plantilla/v_menu_asistencial',"","Refresh");}?>
                  <?if(strpos($this->Modulo->modulos,'ASIST')!==false){$this->load->view('Plantilla/v_menu_facturacion',"","Refresh");}?>
                  <?if($this->Modulo->usr->su_t0=='SI'){$this->load->view('Plantilla/v_menu_contable',"","Refresh");}?>
                  <?if($this->Modulo->usr->su_t0=='SI'){$this->load->view('Plantilla/v_menu_rrhh',"","Refresh");}?>
                <?}?>
              <?}?>

              </ul>
          </section>
          <section class="sidebar busqueda">
            <a href="#">
              <span>Busqueda Pacientes</span>
            </a>
              <form action="<?=site_url('/pacientes/historia/buscar')?>" class="form-inine" method="post" >
                <div class="input-group">
    <input type="Search" placeholder="Buscar..." class="form-control" value="<?=$buscado;?>" name="buscado" />
                  <div class="input-group-btn" data-toggle="tooltipb" data-placement="bottom" title="Buscar">
                    <button class="btn <?=$this->Planthtml->estilo->colorprinc?>">
                      <span class="glyphicon glyphicon-search"></span>
                    </button>
                    <!-- <a class="btn <?=$this->Planthtml->estilo->colorprinc?>" href="<?=site_url('/pacientes/admisiones/nuevo')?>" data-toggle="tooltipn" data-placement="bottom" title="Nuevo">
                      <span class="glyphicon glyphicon-file"></span>
                    </a> -->
                  </div>
                </div>
             </form>
            <hr>
          </section>
        <?}?>
        <section class="sidebar busqueda">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            <span><?=$this->Modulo->usr->nombre;?></span><br/>
          </a>
        </section>
        <section class="sidebar busqueda">
          <a href="<?=site_url('inicio')?>" class="fa fa-lg fa-home"></a>
          &nbsp;&nbsp;&nbsp;
          <a href="<?=site_url('salir')?>" class="fa fa-lg fa-sign-out"></a>
           &nbsp;&nbsp;&nbsp;
          <a href="<?=site_url('ayuda')?>" class="fa fa-lg fa-question"></a>
        </section>
        <section class="sidebar busqueda">
          <hr/>
          <?$this->load->view('Plantilla/v_infoentidad',"","Refresh");?>
        </section>
      </aside>
      <aside class="right-side">                
        <div class="content-wrapper">
          <section class="content">
            <br><br>
            <?=$contenido?>
          </section>
        </div>
      </aside>
    </div>
    
    
    <!-- jQuery 2.1.0 -->
    <script src="<?=$this->Modulo->base_url('Util/js/jquery-2.2.2.min.js')?>"></script>
        <script src="<?=$this->Modulo->base_url('Util/js/grafica.js')?>"></script>
    <script src="<?=$this->Modulo->base_url('Util/js/util.js')?>"></script>
    <script src="<?=$this->Modulo->base_url('Util/js/moment.js')?>"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="<?=$this->Modulo->base_url('Util/jquery_ui_1_11_4/jquery-ui.min.js')?>" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/bootstrap.min.js')?>" type="text/javascript"></script>
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/AdminLTE/app.js')?>" type="text/javascript"></script>
    
    <!-- Sparkline -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>" type="text/javascript"></script>
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/jqueryKnob/jquery.knob.js')?>" type="text/javascript"></script>
    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>" type="text/javascript"></script>
    
    <!-- iCheck
     /*
  +Autor: Ing Mauricio Garibello R
    Fecha: 10/12/2017
+Nota: Se elimina plugin de Check por conflicos al realizar ajustes.
+  */
     -->
    
    <!-- date-time-picker -->
    <script src="<?=$this->Modulo->base_url('Util/flatpickr-master/dist/flatpickr.js')?>"></script>
    <script src="<?=$this->Modulo->base_url('Util/flatpickr-master/dist/l10n/es.js')?>"></script>
    <script src="<?=$this->Modulo->base_url('Util/alertifyjs/alertify.js')?>"></script>
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/bootstrap-datetimepicker.min.js')?>" type="text/javascript"></script>
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/bootstrap-datetimepicker.es.js')?>" type="text/javascript"></script>
    
    <!-- FullCalendar -->
    <script src="<?=$this->Modulo->base_url('Util/Fullcalendar/lib/moment.min.js')?>" type="text/javascript"></script>
    <script src="<?=$this->Modulo->base_url('Util/Fullcalendar/fullcalendar.js')?>" type="text/javascript"></script>
    <script src="<?=$this->Modulo->base_url('Util/Fullcalendar/lang/es.js')?>" type="text/javascript"></script>
    
    <!-- daterangepicker -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/plugins/daterangepicker/daterangepicker.js')?>" type="text/javascript"></script>
    
    <!-- filestyle -->
    <script src="<?=$this->Modulo->base_url('Util/AdminLTE-master/js/bootstrap-filestyle.min.js')?>" type="text/javascript"></script>

              <script>
                var ruta = "<?= site_url() ?>";
                $(document).ready(function(){
                  $('#buscar').click(function(){
                    window.location.href = ruta+"/pacientes/agenda/mensaje/UmVnaXN0cm8gcmVhbGl6YWRvIHNhdGlzZmFjdG9yaWFtZW50ZQ%3D%3D/245686482546/"+$('#fechah').val();
                  });
                  <?php if ($this->uri->segment(2) == "agenda") { ?>
                    $(".form_date").datepicker({
                    locale: {
                      format: 'YYYY-MM-DD'
                    },
                    onSelect: function(date){
                      $('#fecha_programacion').attr('value', date);
                      var info = date.split('/').reverse().join('-');
                      <?php if ($this->uri->segment(3) != "bloquear" && $this->uri->segment(3) != "transladar" && $this->uri->segment(3) != "desbloquear") { ?>
                      location.href = ruta+'/pacientes/agenda/mensaje/UmVnaXN0cm8gcmVhbGl6YWRvIHNhdGlzZmFjdG9yaWFtZW50ZQ%3D%3D/'+$('#medicos').val()+"/"+info;
                      <?php } ?>
                    },
                    showDropdowns: true,
                    timePicker: false,
                    numberOfMonths: 3,
                    singleDatePicker:true
                  }).show();
                });
                 <?php } ?>
              </script>
    
    <?=$js?>
    <script>
        $(".fechas_date").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});
        $('button').click(function(event) {
          if ($(this).text() == "Guardar") {
            var opcion = confirm("Estas guardando una evolución. Esta seguro que esta todo completo");
            if (opcion == true) {
              return true;
            }else{
              return false;
            }
          }
        });
        $(document).ready(function(){
  
  $("body").on('copy', function(e){
    e.preventDefault();
    alert('Esta acción está prohibida');
  })
})
    </script>
	</body>
</html>