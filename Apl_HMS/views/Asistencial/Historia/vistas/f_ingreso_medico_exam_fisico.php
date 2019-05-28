
<fieldset>
  <div class="form-group">
      <label for="altura" class="col-lg-2 control-label">Altura </label>
      <div class="col-lg-1">
        <input name="altura" type="text" class="form-control input-sm" id="altura"  value="<?=$datconsulta->altura_t64?>">Cm
      </div>

      <label for="peso" class="col-lg-1 control-label">Peso</label>
      <div class="col-lg-1">
        <input name="peso" type="text" class="form-control input-sm" id="peso"  value="<?=$datconsulta->peso_t64?>">Kg
      </div>

      <label for="temp" class="col-lg-1 control-label">T°</label>
      <div class="col-lg-1">
        <input name="temp" type="text" class="form-control input-sm" id="temp"  value="<?=$datconsulta->temp_t64?>">°c
      </div>
    </div>
    <div class="form-group">
      <label for="fr" class="col-lg-2 control-label">Fr</label>
      <div class="col-lg-1">
        <input name="fr" type="text" class="form-control input-sm" id="	fr"  value="<?=$datconsulta->fr_t64?>">/min
      </div>

      <label for="fc" class="col-lg-1 control-label">Fc</label>
      <div class="col-lg-1">
        <input name="fc" type="text" class="form-control input-sm" id="fc"  value="<?=$datconsulta->fc_t64?>">/min 
      </div>

      <label for="ta" class="col-lg-1 control-label">TA</label>
      <div class="col-lg-1">
        <input name="ta" type="text" class="form-control input-sm" id="ta"  value="<?=$datconsulta->ta_t64?>">°c
      </div>
    </div>
    <div class="form-group">
       <label for="pvc" class="col-lg-2 control-label">PVC</label>
      <div class="col-lg-1">
        <input name="pvc" type="text" class="form-control input-sm" id="pvc"  value="<?=$datconsulta->pvc_t64?>">°c
      </div>

      <label for="sao2" class="col-lg-1 control-label">SO2</label>
      <div class="col-lg-1">
        <input name="sao2" type="text" class="form-control input-sm" id="sao2"  value="<?=$datconsulta->sao2_t64?>">°c
      </div>
      
       <label for="glsgow" class="col-lg-1 control-label">Glasgow</label>
      <div class="col-lg-1">
        <input name="glsgow" type="text" class="form-control input-sm" id="glsgow"  value="<?=$datconsulta->glsgow_t64?>">°c
      </div>
    </div>
    <div class="form-group">
      <label for="tiss" class="col-lg-2 control-label">TISS</label>
      <div class="col-lg-1">
        <input name="tiss" type="text" class="form-control input-sm" id="tiss"  value="<?=$datconsulta->tiss_t64?>">°c
      </div>
      <label for="apache" class="col-lg-1 control-label">APACHE</label>
      <div class="col-lg-1">
        <input name="apache" type="text" class="form-control input-sm" id="apache"  value="<?=$datconsulta->apache_15?>">°c
      </div>
    </div>
    <?if($btnguardaringreso_medico_exam_fisico==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
      <?}?> 
</fieldset>
