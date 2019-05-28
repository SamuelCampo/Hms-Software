<fieldset>
 
      <div class="row">
        <label for="estado" class="col-lg-2 control-label"><h5>Estado del ingreso:</h5></label>
        <div class="form-group">
          <div class="col-lg-6">
            <textarea name="estado"class="form-control" rows="5" id="estado" value="<?=$historia->estado_t1?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <label for="motconsulta" class="col-lg-2 control-label"><h5>Motivo de consulta:</h5></label>
        <div class="form-group">
          <div class="col-lg-6">
            <textarea name="motconsulta" class="form-control" rows="5" id="motconsulta" value="<?=$historia->motconsulta_t15?>"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <label for="enfermactual" class="col-lg-2 control-label"><h5>Enfermedad actual:</h5></label>
        <div class="form-group">
          <div class="col-lg-6">
            <textarea name="enfermactual" class="form-control" rows="5" id="enfermactual" value="<?=$historia->enfermactual_t15?>"></textarea>
          </div>
        </div>
      </div>
      
      <?if($btnguardaringreso==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
      <?}?>   
    

</fieldset>