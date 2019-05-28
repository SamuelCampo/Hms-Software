<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
?>
<div class="row no-padding no-margin">
  <div class="row panel-heading">
    <legend class="no-margin no-padding">
      Historia Clinica No. <?=$dathistoria->idps_historia_t4?> <b><?=$dathistoria->identificacion_t3?> <?=$dathistoria->nomcomp_t3?></b> <?=$edad?> años
    </legend>
      <div class="form-group">
        <div class="col-lg-3">
          <label class="control-label">Administradora:</label>
          <?=$dathistoria->administradora_t3?>
        </div>
        <div class="col-lg-3">
          <label class="control-label">Servicio:</label>
          <?=$dathistoria->ubicacion_t4?>
        </div>
        <div class="col-lg-3">
          <label class="control-label">Ingreso:</label>
          <?=$dathistoria->fingreso_t4?>
        </div>
      </div>
  </div>
</div>
<?
  if(!empty($mensaje)){
    echo '<div class="row no-padding no-margin text-center" style="margin:0;padding:0;"><div class="well alert msjlista">'.$mensaje.'</div></div>';
  }
?>
<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_motivo_ingreso" data-toggle="tab">Motivo de Ingreso</a></li>
    <li><a href="#tab_exam_fisico" data-toggle="tab">Exámen Físico</a></li>
    <li><a href="#tab_clas_triage" data-toggle="tab">Clasificación Triage</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="tab_motivo_ingreso">
      <?=$this->load->view('Asistencial/Historia/f_ingreso_medico_mot_ingreso',"",true);?>
    </div>
    <div class="tab-pane" id="tab_exam_fisico">
      <?=$this->load->view('Asistencial/Historia/f_ingreso_medico_exam_fisico',"",true);?>
    </div>
    <div class="tab-pane" id="tab_clas_triage">
      <?=$this->load->view('Asistencial/Historia/f_ingreso_medico_clas_triage',"",true);?>
    </div>
  </div>
</div>

  
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