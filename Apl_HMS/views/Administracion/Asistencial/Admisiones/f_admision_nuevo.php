<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
?>
<form class="form-horizontal" role="form" action="<?=site_url("pacientes/admisiones/nuevo/guardar")?>" method="post">
  <?=$this->load->view('Asistencial/Admisiones/f_paciente',"",true);?>
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