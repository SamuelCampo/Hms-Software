<?
  $fecha = explode("-",$datpaciente->fnacim_t3);
  $edad = date("Y")-$fecha[0];
?>
<?php if ($this->uri->segment(3) == "modificar"): ?>
  <?php $url = "pacientes/admisiones/modificar/guardar" ?>
  <?php else: ?>
    <?php $url = "pacientes/admisiones/nuevo/guardar" ?>
<?php endif ?>
<form class="form-horizontal" role="form" action="<?=site_url($url)?>" method="post">
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