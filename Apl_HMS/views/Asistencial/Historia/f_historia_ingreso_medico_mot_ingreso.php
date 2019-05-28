  <fieldset>
      <div class="form-group"> 
        <label for="estadoingreso" class="col-lg-3 control-label">Estado del ingreso:</label>
          <div class="col-lg-9">
            <textarea name="estadoingreso"class="form-control" <?=$deshabingmed?> rows="3" id="estadoingreso" required><?=$datconsulta->estadoingreso_t64?></textarea>
          </div>
      </div>
      <div class="form-group">
        <label for="motconsulta" class="col-lg-3 control-label">Motivo de consulta:</label>
          <div class="col-lg-9">
            <textarea name="motconsulta" class="form-control" <?=$deshabingmed?> rows="3" id="motconsulta" required><?=$datconsulta->motconsulta_t64?></textarea>
          </div>
      </div>
     <div class="form-group">
        <label for="enfermedadactual" class="col-lg-3 control-label">Enfermedad actual:</label>
        <div class="col-lg-9">
          <textarea name="enfermactual" class="form-control" <?=$deshabingmed?> rows="3" id="enfermactual" required><?=$datconsulta->enfermactual_t64?></textarea>
        </div>
     </div>
  </fieldset>