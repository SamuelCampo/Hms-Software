
<fieldset>
 
  <div class="row">
    <div class="col-lg-12">
      <div class="form-group">
        <label for="altura" class="col-lg-1 control-label">Altura </label>
        <div class="col-lg-3">
          <input name="altura" type="number" class="form-control input-sm" placeholder="Cms" id="altura" <?=$deshabingmed?> value="<?=$datconsulta->altura_t64?>" required>
        </div>
        <label for="peso" class="col-lg-1 control-label">Peso</label>
        <div class="col-lg-3">
          <input name="peso" type="number" class="form-control input-sm" placeholder="Kg" id="peso" <?=$deshabingmed?> value="<?=$datconsulta->peso_t64?>" required>
        </div>
        <label for="imc" class="col-lg-1 control-label">IMC</label>
        <div class="col-lg-3">
          <input name="imc" type="number" class="form-control input-sm"  id="imc" <?=$deshabingmed?> value="<?=$datconsulta->imc_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">  
        <label for="fr" class="col-lg-1 control-label">Fr</label>
        <div class="col-lg-3">
          <input name="fr" type="number" class="form-control input-sm" placeholder="RPM" id="	fr" <?=$deshabingmed?> value="<?=$datconsulta->fr_t64?>" required>
        </div>
        <label for="fc" class="col-lg-1 control-label">Fc</label>
        <div class="col-lg-3">
          <input name="fc" type="number" class="form-control input-sm" placeholder="LPM" id="fc" <?=$deshabingmed?> value="<?=$datconsulta->fc_t64?>" required> 
        </div>
        <label for="ta" class="col-lg-1 control-label">TA</label>
        <div class="col-lg-3">
          <input name="ta" type="text" value="/" class="form-control input-sm" placeholder="mmHg" id="ta" <?=$deshabingmed?> value="<?=$datconsulta->ta_t64?>" required>
        </div>
      </div>
      <div class="form-group"> 
        <label for="sao2" class="col-lg-1 control-label">SPO2</label>
        <div class="col-lg-3">
          <input name="sao2" type="number" maxlength="100" min="1" max="100" placeholder="%" class="form-control input-sm" id="sao2" <?=$deshabingmed?> value="<?=$datconsulta->sao2_t64?>" required><br/>
        </div>
        <label for="temp" class="col-lg-1 control-label">T°</label>
        <div class="col-lg-3">
          <input name="temp" type="float" class="form-control input-sm" placeholder="ºC" id="temp" <?=$deshabingmed?> value="<?=$datconsulta->temp_t64?>" required>
        </div>
         <label for="glsgow" class="col-lg-1 control-label">Glasgow/15</label>
        <div class="col-lg-3">
          <input name="glsgow" type="number" class="form-control input-sm" placeholder="/15" id="glsgow" <?=$deshabingmed?> value="<?=$datconsulta->glsgow_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label for="sao2" class="col-lg-1 control-label">Glasgow motora</label>
        <div class="col-lg-3">
          <input name="gmotora" type="number" maxlength="6" min="1" max="6" placeholder="/6" class="form-control input-sm" id="gocular"   required ><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow verbal</label>
        <div class="col-lg-3">
          <input name="gverb" type="number" maxlength="5" min="1" max="5" placeholder="/5" class="form-control input-sm" id="gverb" required><br/>
        </div>
        <label for="sao2" class="col-lg-1 control-label">Glasgow ocular</label>
        <div class="col-lg-3">
          <input name="gocular" type="number" maxlength="4" min="1" max="4" placeholder="/4" class="form-control input-sm" id="gocular"  required><br/>
        </div>
      </div>
      
    </div>
  </div>
 
</fieldset>