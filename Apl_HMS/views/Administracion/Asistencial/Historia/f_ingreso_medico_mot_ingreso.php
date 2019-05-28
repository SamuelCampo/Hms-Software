  <fieldset>
    <div class="row">
    <div class="col-lg-1">      
    </div>
    <div class="col-lg-11">   
      <div class="form-group">
        <label for="estadoingreso" class="col-lg-2 control-label"><h5>Estado del ingreso:</h5></label>
          <div class="col-lg-6">
            <textarea name="estadoingreso"class="form-control" rows="5" id="estadoingreso"><?=$datconsulta->estadoingreso_t64?></textarea>
          </div>
      </div>
      <div class="form-group">
        <label for="motconsulta" class="col-lg-2 control-label"><h5>Motivo de consulta:</h5></label>
            <div class="col-lg-6">
              <textarea name="motconsulta" class="form-control" rows="5" id="motconsulta"><?=$datconsulta->motconsulta_t64?></textarea>
            </div>
      </div>
      <div class="row">
        <label for="enfermedadactual" class="col-lg-2 control-label"><h5>Enfermedad actual:</h5></label>
            <div class="col-lg-6">
              <textarea name="enfermactual" class="form-control" rows="5" id="enfermactual"><?=$datconsulta->enfermactual_t64?></textarea>
            </div>
      </div>
      <?if($btnguardaringreso_medico_mot_ingreso==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button name="formularioenviado" value="imprediag" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
     </div>
      <?}?> 
  </fieldset>
