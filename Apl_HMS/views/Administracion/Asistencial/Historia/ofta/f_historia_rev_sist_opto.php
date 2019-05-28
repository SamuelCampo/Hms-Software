<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
<legend>RETINOSCOPIA</legend>


<div class="col-lg-12">            
<legend>OJO DERECHO</legend>
</div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">ESTATICA</label>
</div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">DINAMICA</label>
</div>                
 
<div class="form-group">
  <div class="col-lg-6">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-6">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12">            
<legend>OJO IZQUIERDO</legend>
</div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">ESTATICA</label>
                </div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">DINAMICA</label>
                </div>                
 
<div class="form-group">
  <div class="col-lg-6">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-6">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>


  <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>  

<div class="col-lg-12">            
<legend>SUBJETIVO</legend>
</div>
<div class="col-lg-12">            
<legend>OJO DERECHO</legend>
</div>
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >AV:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  

<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  
<div class="col-lg-3">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
</div>
  
<div class="col-lg-12">            
<legend>OJO IZQUIERDO</legend>
</div>
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >AV:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  

<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >VL:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >VP:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
  <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>  
  </div>

    



<div class="col-lg-12">
<legend align="left">VISION CROMATICA</legend>
</div>
    <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">OJO DERECHO</label>
                </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Deuteranomalia</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Estrabismo Convergente</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">70 seg /arc</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">100 seg/arc</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">200 seg/ arc</label>
              <select class="form-control input-sm" name="consultaso[psra_colesteroltotal]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_colesteroltotal_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">400 seg/arc</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
         <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
         </div>
<div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">OJO IZQUIERDO</label>
                </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Deuteranomalia</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Estrabismo Convergente</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">70 seg /arc</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">100 seg/arc</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">200 seg/ arc</label>
              <select class="form-control input-sm" name="consultaso[psra_colesteroltotal]" >
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_colesteroltotal_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">400 seg/arc</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
         <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
         </div>
       

<div class="col-lg-12">
<legend align="left">VERSIONES</legend>
</div>
<div class="col-lg-12">
<legend align="left">SC</legend>
</div> 
<div class="col-lg-6">
<legend align="left">CERCA</legend>
</div>
<div class="col-lg-12">
<legend align="left">OJO DERECHO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>

<div class="col-lg-12">
<legend align="left">OJO IZQUIERDO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>


<div class="col-lg-6">
<legend align="left">LEJOS</legend>
</div>
<div class="col-lg-12">
<legend align="left">OJO DERECHO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>

<div class="col-lg-12">
<legend align="left">OJO IZQUIERDO</legend>
</div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo inferior</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_optometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_optometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Oblicuo Superior</label>
        <select class="form-control input-sm" name="consultaso[psra_glicemia]" >
    <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_glicemia_t99))?>
              </select>
    </div>

    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Medio</label>
        <select class="form-control input-sm" name="consultaso[psra_audiometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
              </select>
    </div>
    <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-8">Recto Lateral</label>
        <select class="form-control input-sm" name="consultaso[psra_espirometria]">
                 <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_espirometria_t99))?>
              </select>
    </div>
        <div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
  
        



<div class="col-lg-12 ">
<legend align="left">RX CICLOPEGIA</legend>
</div> 

<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">KM</legend>
</div> 
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">EXTERNO: ORBITAS Y PARPADOS</legend>
</div> 
<div class="col-lg-12 ">
<legend align="left">MOC</legend>
</div> 
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">VIA LAGRIMAL</legend>
</div> 
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">OFTALMOLOGIA</legend>
</div> 
<div class="col-lg-12 ">
<legend align="left">BX</legend>
</div> 
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">GONIO</legend>
</div> 
 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
<div class="col-lg-12 ">
<legend align="left">PIO</legend>
</div> 
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
  <div class="col-lg-12 ">
<legend align="left">CAMARAS</legend>
</div>
  
<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>
  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
  <div class="col-lg-12 ">
<legend align="left">FO</legend>
</div> 

  <div class="col-lg-3">
    <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"DILATADO","valor"=>"SI","actual"=>$datconsulta->cronicas_t66),true)?>
  <label for="DILATADO" class="control-label">DILATADO</label>
  </div>
<div class="col-lg-3">
    <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"NO DILATADO","valor"=>"SI","actual"=>$datconsulta->cronicas_t66),true)?>
  <label for="NO DILATADO" class="control-label">NO DILATADO</label>
</div>

<div class="form-group">
  <div class="col-lg-3">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>

  <div class="col-lg-3">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>

<div class="col-lg-12">
  <legend for="xxx" align="left" >IDENTIFICACION DEL ORIGEN DE LA ENFERMEDAD:</legend>
</div> 

                  <div class="col-lg-3">
                  <label for="alergias" class="control-label col-lg-8">PACIENTE SANO</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[irritantes]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="hipertension" class="control-label col-lg-8">ENFERMEDAD GENERAL O COMUN</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[supra]","valor"=>"SI","actual"=>$datantec->hipertension_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  
                  <div class="col-lg-3">
                  <label for="asma" class="control-label col-lg-8">ENFERMEDAD PROFESIONAL U OCUPACIONAL</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[bolsas]","valor"=>"SI","actual"=>$datantec->asma_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="cancer" class="control-label col-lg-8">ACCIDENTE DE TRABAJO O FUERA DEL TRABAJO</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[movilidad]" ,"valor"=>"SI","actual"=>$datantec->cancer_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
             
<div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">DESCRIPCION</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
       </div>  
    
<div class="col-lg-12">
<legend align="left">INDICACIONES  DE EDUCACION DEL PACIENTE</legend>
</div> 
<<div class="form-group">
                <label for="descripcion1" class="col-lg-12 control-label">EDUCACION DEL PACIENTE</label>
                <div class="col-lg-12">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
</div>        
<div class="col-lg-12">
<legend align="left">PRESCRIPCION 0PTICA</legend>
</div> 
<div class="form-group">
  <div class="col-lg-1">
    <label for="OJO DERECHO" >OJO DERECHO:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>
</div>  
  <div class="col-lg-1">
    <label for="OJO IZQUIERDO" >OJO IZQUIERDO:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>
</div>  
