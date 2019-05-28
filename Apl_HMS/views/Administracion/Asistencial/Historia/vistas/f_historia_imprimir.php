<?
 
  
?>
    <fieldset>
      <div class="form-group">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <a href="<?=site_url("pacientes/historia/imprimir/historia/".$dathistoria->idps_historia_t4)?>">Historia Clinica</a>
        </div>
        <div class="col-lg-3">
         <a href="<?=site_url("pacientes/historia/imprimir/epicrisis/".$dathistoria->idps_historia_t4)?>">Epicrisis</a>
        </div>
        <div class="col-lg-3">
         <a href="<?=site_url("pacientes/historia/imprimir/remision/".$dathistoria->idps_historia_t4)?>">Remisión</a>
        </div>
        <div class="col-lg-3">
         <a href="<?=site_url("pacientes/historia/imprimir/formula/".$dathistoria->idps_historia_t4)?>">Fórmula</a>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
          <a href="<?=site_url("pacientes/historia/imprimir/examenes/".$dathistoria->idps_historia_t4)?>">Exámenes</a>
        </div>
        <div class="col-lg-3">
         <a href="<?=site_url("pacientes/historia/imprimir/incapacidad/".$dathistoria->idps_historia_t4)?>">Incapacidad</a>
        </div>
      </div>
      <br><br><br>
  </fieldset>

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