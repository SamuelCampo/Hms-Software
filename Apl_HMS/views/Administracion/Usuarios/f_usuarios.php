<?
  //var_dump($usuario);
  //var_dump($personal);
?>
<form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post" onsubmit="" enctype="multipart/form-data" id="form_personal">
  <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
  <div class="row contenedorsobreadonopd">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_ingreso" data-toggle="tab">Datos de Ingreso</a></li>
        <li><a href="#tab_datos" data-toggle="tab">Datos Personales</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_ingreso">
          <?=$this->load->view('Administracion/Usuarios/f_usuario',$arr_modificar,true);?>
        </div>
        <div class="tab-pane" id="tab_datos">
          <?=$this->load->view('RRHH/Personal/f_personal',$arr_modificar,true);?>
          <div class="form-group">
            <div class="row text-center">
             <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?> "onclick="return validacion()">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </form>

<script type="text/javascript">
    $(".form_date").datetimepicker({
      format: 'yyyy-mm-dd',
      language:  'es',
      weekStart: 1,
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
</script>