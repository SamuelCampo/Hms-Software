<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
  //var_dump($datagenda);
?>
  <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_paciente" data-toggle="tab">Paciente</a></li>
        <li ><a href="#tab_cita" data-toggle="tab">Cita</a></li>
        <li ><a href="#tab_historia" data-toggle="tab">Historia</a></li>
      </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab_paciente">
        <form class="form-horizontal" role="form" action="<?=site_url("consexterna/ADT/gestionar/".$dathistoria->idps_historia_t4."/guardar")?>" method="post">
          <?=$this->load->view('Asistencial/Admisiones/f_paciente',"",true);?>
        </form>
      </div>
      <div class="tab-pane" id="tab_cita">
        <form class="form-horizontal" role="form" action="<?=site_url("pacientes/agenda/modificar/".$dathistoria->idps_historia_t4."/guardar")?>" method="post">
          <?=$this->load->view('Asistencial/Agenda/f_agenda_prop',"",true);?>
        </form>
      </div>
      <div class="tab-pane" id="tab_historia">
          <?=$this->load->view('Asistencial/Historia/f_historia_resum_ingreso',"",'refresh');;?>
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