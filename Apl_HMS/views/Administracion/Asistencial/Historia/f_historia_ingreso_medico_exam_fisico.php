  <div class="row">
    <div class="col-lg-12">
      <div class="form-group"> 
         <label for="glsgow" class="col-lg-1 control-label">Glasgow/15</label>
        <div class="col-lg-3">
          <input name="glsgow" type="text" class="form-control input-sm" placeholder="/15" id="glsgow" <?=$deshabingmed?> value="<?=$datconsulta->glsgow_t64?>" readonly="readonly">
        </div>
      </div>
      <div class="form-group">
        <label for="gmotora" class="col-lg-1 control-label">Glasgow motora</label>
        <div class="col-lg-3">
          <input name="gmotora" type="number" maxlength="6" min="1" max="6" placeholder="/6" class="form-control input-sm" id="gmotora" value="<?=$datconsulta->ggowmotora_t64?>" required ><br/>
        </div>
        <label for="gverb" class="col-lg-1 control-label">Glasgow verbal</label>
        <div class="col-lg-3">
          <input name="gverb" type="number" maxlength="5" min="1" max="5" placeholder="/5" class="form-control input-sm" id="gverb" value="<?=$datconsulta->ggowverbal_t64?>" required><br/>
        </div>
        <label for="gocular" class="col-lg-1 control-label">Glasgow ocular</label>
        <div class="col-lg-3">
          <input name="gocular" type="number" maxlength="4" min="1" max="4" placeholder="/4" class="form-control input-sm" id="gocular" value="<?=$datconsulta->ggowocular_t64?>" required><br/>
        </div>
      </div>
      
    </div>
  </div>