<div class="row">
  <div class="col-lg-12">
    <?php if ($this->db->database != "hms_ERGOVIDA"): ?>
        <div class="form-group">
          <label for="ta" class="col-lg-1 control-label">TA</label>
          <div class="col-lg-3">
            <input name="ta" type="text" class="form-control input-sm" placeholder="mmHg" id="ta" <?=$deshabingmed?> value="<?=$datconsulta->ta_t64?:"/"?>" required>
          </div>
          <label for="fc" class="col-lg-1 control-label">Fc</label>
          <div class="col-lg-3">
            <input name="fc" type="number" class="form-control input-sm" placeholder="LPM" id="fc" <?=$deshabingmed?> value="<?=$datconsulta->fc_t64?>" required> 
          </div>
          <div class="form-group">  
          <label for="fr" class="col-lg-1 control-label">Fr</label>
          <div class="col-lg-3">
            <input name="fr" type="number" class="form-control input-sm" placeholder="RPM" id=" fr" <?=$deshabingmed?> value="<?=$datconsulta->fr_t64?>" required>
          </div>
          </div>
        </div>
        <div class="form-group">
            <label for="temp" class="col-lg-1 control-label">T°</label>
            <div class="col-lg-3">
              <input name="temp" type="float" class="form-control input-sm" placeholder="ºC" id="temp" <?=$deshabingmed?> value="<?=$datconsulta->temp_t64?>" required>
            </div>
            
            <label for="sao2" class="col-lg-1 control-label">SPO2</label>
            <div class="col-lg-3">
              <input name="sao2" type="number" maxlength="100" min="1" max="100" placeholder="%" class="form-control input-sm" id="sao2" <?=$deshabingmed?> value="<?=$datconsulta->sao2_t64?>" required><br/>
            </div>
         </div>
         <?php endif ?>
         <div class="form-group">
           <label for="altura" class="col-lg-1 control-label">Altura </label>
            <div class="col-lg-3">
              <input name="altura" type="number" class="form-control input-sm" placeholder="Cms" id="altura" <?=$deshabingmed?> value="<?=$datconsulta->altura_t64?>" required>
            </div>
            <label for="peso" class="col-lg-1 control-label">Peso</label>
            <div class="col-lg-3">
              <input name="peso" type="number" step="0.01" class="form-control input-sm" placeholder="Kg" id="peso" <?=$deshabingmed?> value="<?=$datconsulta->peso_t64?>" required>
            </div>
            <label for="imc" class="col-lg-1 control-label">IMC</label>
            <div class="col-lg-3">
              <input name="imc" type="number" step="0.01" class="form-control input-sm"  id="imc" <?=$deshabingmed?> value="<?=$datconsulta->imc_t64?>" readonly="readonly">
            </div> 
         </div>
          
         <?php if ($this->db->database != "hms_ERGOVIDA"): ?>
          <div class="form-group">
            <label for="temp" class="col-lg-1 control-label">M. CRANEO:</label>
            <div class="col-lg-3">
              <input name="mcraneo" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->mcraneo_t64?>">
            </div>
            <label for="temp" class="col-lg-1 control-label">M. MUÑECA:</label>
            <div class="col-lg-3">
              <input name="mmuneca" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->mmuneca_t64?>">
            </div>
         <div class="form-group">
            <label for="temp" class="col-lg-1 control-label">P. BRAZO:</label>
            <div class="col-lg-3">
              <input name="pbrazo" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->pbrazo_t64?>">
            </div>
          
            <label for="temp" class="col-lg-1 control-label">P. ABD:</label>
            <div class="col-lg-3">
              <input name="pabd" type="float" class="form-control input-sm" placeholder="Cms" id="pabd" <?=$deshabingmed?> value="<?=$datconsulta->pabd_t64?>">
          </div>
         </div>
                   <div class="form-group">        
          <label for="temp" class="col-lg-1 control-label">SINT RESP</label>
          <div class="col-lg-3">
          <select class="form-control input-sm" name="SINTR"  id="rh" >
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_nosi,"res4505","sino",$datconsulta->vacunas["ESQAD"]->valorcod_t106))?>
              </select>      
          </div>
    
            <label for="temp" class="col-lg-1 control-label">SINT PIEL</label>
            <div class="col-lg-3">
            <select class="form-control input-sm" name="SINTP"  id="rh" >
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_nosi,"res4505","sino",$datconsulta->vacunas["ESQAD"]->valorcod_t106))?>
              </select>
            </div>

            <label for="temp" class="col-lg-1 control-label">SINT FEBRIL</label>
            <div class="col-lg-3">
            <select class="form-control input-sm" name="SINTF"  id="rh" >
                <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_nosi,"res4505","sino",$datconsulta->vacunas["ESQAD"]->valorcod_t106))?>
              </select>
            </div>
        </div>
      <?php endif ?>
   </div>
</div>     