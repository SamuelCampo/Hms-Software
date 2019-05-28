<?
  //var_dump($datconsulta);
?>
  <fieldset>
     <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
       <div class="form-group">
         <label for="fejecucion" class="col-lg-4 control-label">Destino del paciente:</label>
         <div class="col-lg-8">
           <select class="form-control input-sm" name="destinopac" id="destinopac" required >
             <option></option>
              <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_destinopac,"destino","destino",$datconsulta->destinopac_t64))?>
           </select>
         </div>
       </div>
       <div class="form-group">
         
         <label for="condicionsalida" class="col-lg-4 control-label">Condiciones de salida:</label>
         <div class="col-lg-8">
           <textarea class="form-control" name="condicionsalida" id="condicionsalida" rows="6" required><?=$datconsulta->condicionsalida_t64?></textarea>
         </div>
       </div>
       </div>
      </div>
     </div>
     <div class="form-group">
        <div class="row text-center">
         <button name="formularioenviado" value="cierre" type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Guardar</button>
        </div>
     </div>
    </fieldset>