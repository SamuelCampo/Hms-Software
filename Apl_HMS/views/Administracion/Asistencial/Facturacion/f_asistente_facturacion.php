<div class="row">
  <?
  if(!empty($mensaje)){
    ?>
  <div class="well alert msjlista"><?=$mensaje?></div>
    <?
  }
  ?>
  <?=$this->load->view('Asistencial/Facturacion/f_asistentefact_filtrar',"",true)?>
  <?=$this->load->view('Asistencial/Facturacion/f_asistentefact_filtrados',"",true)?>
  
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


