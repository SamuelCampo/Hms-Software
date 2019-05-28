<fieldset>
    <div class="form-group">
      <label for="neurologico" class="col-lg-2 control-label">Neurologico:</label>
      <div class="col-lg-5">
        <input name="neurologico" type="text" class="form-control input-sm" id="neurologico"  value="<?=$dathistoria->neurologico_t64?>">
      </div>
    </div>
    <div class="form-group">
      <label for="respiratorio" class="col-lg-2 control-label">Respiratorio:</label>
      <div class="col-lg-5">
        <input name="respiratorio" type="text" class="form-control input-sm" id="respiratorio"  value="<?=$dathistoria->respiratorio_t64?>">
      </div>
    </div>
    <div class="form-group">
      <label for="cardiovascular" class="col-lg-2 control-label">Cardiovascular:</label>
      <div class="col-lg-5">
        <input name="cardiovascular" type="text" class="form-control input-sm" id="cardiovascular"  value="<?=$dathistoria->cardiovascular_t64?>">
      </div>
    </div>
     <div class="form-group">
      <label for="abdomen" class="col-lg-2 control-label">Abdomen:</label>
      <div class="col-lg-5">
        <input name="abdomen" type="text" class="form-control input-sm" id="abdomen"  value="<?=$dathistoria->abdomen_t64?>">
      </div>
    </div>
    <div class="form-group">
      <label for="urinario" class="col-lg-2 control-label">Genito-Urinario:</label>
      <div class="col-lg-5">
        <input name="urinario" type="text" class="form-control input-sm" id="urinario"  value="<?=$dathistoria->urinario_t64?>">
      </div>
    </div>
    <div class="form-group">
      <label for="extremidad" class="col-lg-2 control-label">Extremidades:</label>
      <div class="col-lg-5">
        <input name="extremidad" type="text" class="form-control input-sm" id="extremidad"  value="<?=$dathistoria->extremidad_t64?>">
      </div>
    </div>
    <div class="form-group">
      <label for="otros" class="col-lg-2 control-label">Otros:</label>
      <div class="col-lg-5">
        <input name="otros" type="text" class="form-control input-sm" id="otros"  value="<?=$dathistoria->otros_t64?>">
      <br/><br/><br/> <br/>
      </div>
    </div>
    <?if($btnguardarantecedentes==true){?>
    <div class="form-group">
      <div class="row text-center">
       <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
      </div>
    </div>
    <?}?>   
</fieldset>