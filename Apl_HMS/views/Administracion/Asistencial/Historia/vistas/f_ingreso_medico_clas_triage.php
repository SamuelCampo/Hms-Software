<fieldset>
  <div class="form-group">
      <label for="triage" class="col-lg-4 control-label">Clasificación de Triage</label>
      <div class="col-lg-4">
        <select name="triage" class="form-control" id="triage">
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_clastriage,"tipo","tipo",""))?>
        </select>
      </div>
   </div> 
   <br>
   <?if($btnguardar_ingreso_medico_clas_triage==true){?>
      <div class="form-group">
        <div class="row text-center">
         <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
      </div>
   <?}?> 
</fieldset>