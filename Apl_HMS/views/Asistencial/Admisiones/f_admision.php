<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
?>
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
        <li><a href="#tab_antecedentes" data-toggle="tab">Autorizaciones</a></li>
      </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_paciente">
        <form class="form-horizontal" role="form" action="<?=site_url("pacientes/admisiones/nuevo/guardar")?>" method="post">
          <?=$this->load->view('Asistencial/Admisiones/f_paciente',"",true);?>
        </form>
      </div>
      <div class="tab-pane" id="tab_antecedentes">
        <form class="form-horizontal" role="form" action="<?=site_url("pacientes/admisiones/autorizaciones/".$dathistoria->idps_historia_t4."/guardar")?>" method="post" onsubmit="">
          <?=$this->load->view('Asistencial/Admisiones/f_autorizaciones',"",true);?>
        </form>
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