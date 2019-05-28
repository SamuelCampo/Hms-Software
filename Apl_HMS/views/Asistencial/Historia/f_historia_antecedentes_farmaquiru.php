<?
  //var_dump($datantec);
?>
<fieldset>
      <div class="form-group">
        <div class="col-lg-1"></div>
        <label for="farmacologicos" class="col-lg-2 control-label">Farmacológicos:</label>
          <div class="col-lg-8">
            <textarea name="antecedentes[PERSONALES][farmacologicos]" class="form-control <?=$deshabingmed?>" rows="4" id="farmacologicos" required><?=$datconsulta->datantpers->farmacologicos_t65?></textarea>
          </div>
      </div>
      <div class="form-group">
        <div class="col-lg-1"></div>
        <label for="quirurgicos" class="col-lg-2 control-label">Quirúrgicos:</label>
          <div class="col-lg-8">
            <textarea name="antecedentes[PERSONALES][quirurgicos]" class="form-control <?=$deshabingmed?>" rows="4" id="quirurgicos" required><?=$datconsulta->datantpers->quirurgicos_t65?></textarea>
          </div>
      </div>
  </fieldset>