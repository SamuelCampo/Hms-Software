<style type="text/css">
  .form-horizontal .form-group {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 0;
}
</style>
<legend>DETALLE DE CONSULTA ODONTOLOGICA</legend>

<div class="col-lg-12 ">
<legend align="left">HABITOS DE HIGIENE ORAL</legend>
</div> 
<div class="form-group">
  <div class="col-lg-3">
    <label for="Frecuencia de Cepillado" >Frecuencia de Cepillado:</label>
    <input name="revision[cepillado]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_cepillado_odon"]?>">
    <br>
  </div>

  <div class="col-lg-3">
    <label for="Uso de seda Dental" >Uso de seda Dental:</label>
    <input name="revision[dental]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_dental_odon"]?>">
  </div>

  <div class="col-lg-3">
    <label for="Enjuague Bucal" >Enjuaje Bucal:</label>
    <input name="revision[bucal]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_bucal_odon"]?>">
  </div>
  

  <div class="col-lg-3">
    <label for="Habitos" >Habitos:</label>
    <input name="revision[habitos]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_habitos_odon"]?>">
    <br>
  </div>  

  <div class="col-lg-3">
    <label for="Ultima consulta Odontologica" >Ultima consulta Odontologica:</label>
    <input name="revision[ultima_consulta]" type="text" class="form-control" id="xxx" placeholder="" value="<?=$datodon[0]["r_ultima_consulta_odon"]?>">
  </div>
</div>


<div class="col-lg-12">
  <legend for="xxx" align="left" >EXAMEN CLINICO DE LA CAVIDAD ORAL:</legend>
</div> 


</div>
<div class="form-group ">
      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-3">LABIOS</label>
        <select class="form-control input-sm" name="revision[labios]">
          <?if(!empty($datodon[0]["r_labios_odon"])){?>
            <option select value="<?=$datodon[0]["r_labios_odon"]?>"><?=$datodon[0]["r_labios_odon"]?></option>
          <?}?>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
        <br>
      </div>

      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-3">VESTIBULO</label>
        <select class="form-control input-sm" name="revision[vestibulo]">
          <?if(!empty($datodon[0]["r_vestibulo_odon"])){?>
            <option select value="<?=$datodon[0]["r_vestibulo_odon"]?>"><?=$datodon[0]["r_vestibulo_odon"]?></option>
          <?}?>
          <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
      </div>

      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-3">CARRILLOS</label>
        <select class="form-control input-sm" name="revision[carrillos]">
          <?if(!empty($datodon[0]["r_carrillos_odon"])){?>
            <option select value="<?=$datodon[0]["r_carrillos_odon"]?>"><?=$datodon[0]["r_carrillos_odon"]?></option>
          <?}?>
                     <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
       
      </div>

      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-3">PALADAR</label>
        <select class="form-control input-sm" name="revision[paladar]">
          <?if(!empty($datodon[0]["r_paladar_odon"])){?>
            <option select value="<?=$datodon[0]["r_paladar_odon"]?>"><?=$datodon[0]["r_paladar_odon"]?></option>
          <?}?>
                     <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
         <br>
      </div>

      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-3">LENGUA</label>
        <select class="form-control input-sm" name="revision[lengua]">
           <?if(!empty($datodon[0]["r_lengua_odon"])){?>
            <option select value="<?=$datodon[0]["r_lengua_odon"]?>"><?=$datodon[0]["r_lengua_odon"]?></option>
          <?}?>
                     <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
        <br>
      </div>

      <div class=" col-lg-3">
        <label for="cronicas" class="control-label col-lg-6">PISO DE LENGUA</label>
        <select class="form-control input-sm" name="revision[piso_lengua]">
          <?if(!empty($datodon[0]["r_piso_lengua_odon"])){?>
            <option select value="<?=$datodon[0]["r_piso_lengua_odon"]?>"><?=$datodon[0]["r_piso_lengua_odon"]?></option>
          <?}?>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
      </div>

      <div class="form-group">
       <div class="col-lg-6">
         <label for="descripcion" class="col-lg-2 control-label">Descripci&oacute;n</label>
         <div class="col-lg-8">
         <textarea name="revision[descrip]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_descrip_odon"]?></textarea>
         </div>
       </div>

       <div class="col-lg-12">
        <legend for="xxx" align="left" >EXAMEN PERIODONTAL:</legend>
       </div> 

        <div class="col-lg-3">
         <label for="Enjuague Bucal" >Aspecto:</label>
         <select class="form-control input-sm" name="revision[aspecto]">
          <?if(!empty($datodon[0]["r_aspecto_odon"])){?>
            <option select value="<?=$datodon[0]["r_aspecto_odon"]?>"><?=$datodon[0]["r_aspecto_odon"]?></option>
          <?}?>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>
        </div>

       <div class="col-lg-3">
        <label for="Enjuague Bucal" >Color:</label>
        <select class="form-control input-sm" name="revision[color]">
          <?if(!empty($datodon[0]["r_color_odon"])){?>
            <option select value="<?=$datodon[0]["r_color_odon"]?>"><?=$datodon[0]["r_color_odon"]?></option>
          <?}?>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select>  
       </div>

       <div class="col-lg-3">
        <label for="Enjuague Bucal" >Forma:</label>
        <select class="form-control input-sm" name="revision[forma]">
          <?if(!empty($datodon[0]["r_forma_odonn"])){?>
            <option select value="<?=$datodon[0]["r_color_odon"]?>"><?=$datodon[0]["r_forma_odon"]?></option>
          <?}?>
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Historia->arr_normalanorm,"item","item",$datconsultaso->psra_audiometria_t99))?>
        </select> 
       </div>
     </div>
   

       <div class="col-lg-6">
        <label for="descripcion" class="col-lg-2 control-label">Descripci&oacute;n</label>
        <div class="col-lg-8">
        <textarea name="revision[descrip2]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_descrip2_odon"]?></textarea>
      </div> 
    </div> 
       
</div>
<?php // var_dump($datodon); ?>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
              <div class="form-group">
                  <div class="col-lg-3">
                  <label for="alergias" class="control-label col-lg-8">Factores Irritantes</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[irritantes]","valor"=>"SI","actual"=>$datodon[0]["r_irritantes_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                   <div class="col-lg-3">
                  <label for="hipertension" class="control-label col-lg-8">Calculos Supragingival</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[supra]","valor"=>"SI","actual"=>$datodon[0]["r_supra_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="hipertension" class="control-label col-lg-8">Calculos Subgingival</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[subra]","valor"=>"SI","actual"=>$datodon[0]["r_bolsas_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="asma" class="control-label col-lg-8">Bolsas</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[bolsas]","valor"=>"SI","actual"=>$datodon[0]["r_bolsas_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
             </div>
            <div class="form-group">
                  <div class="col-lg-3">
                  <label for="cancer" class="control-label col-lg-8">Movilidad Dentaria</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[movilidad]" ,"valor"=>"SI","actual"=>$datodon[0]["r_movilidad_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="cardiovascular" class="control-label col-lg-8">Malposicion Dentaria</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[malposicion]","valor"=>"SI","actual"=>$datodon[0]["r_malposicion_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3">
                  <label for="diabetes" class="control-label col-lg-8">Obturaciones Desbordantes</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[obturaciones]","valor"=>"SI","actual"=>$datodon[0]["r_obturaciones_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
                  <div class="col-lg-3" style=" margin-left: -30px;">
                  <label for="dijestivas" class="control-label col-lg-8">Coronas desadaptadas</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"revision[coronas]","valor"=>"SI","actual"=>$datodon[0]["r_coronas_odon"],"disabled"=>$deshabingmed),true)?>
                  </label>
                  </div>
            </div>
        </div>
    </div>
</div>  

<div class="form-group">
       <div class="col-lg-6">
         <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
          <div class="col-lg-8">
            <textarea name="revision[descrip3]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_descrip3_odon"]?></textarea>
          </div>
       </div> 

       <div class="col-lg-6">
        <label for="otros" class="col-lg-2 control-label">Otros</label>
        <div class="col-lg-8">
         <input name="revision[otros]" type="text" class="form-control <?=$deshabingmed?>" id="otros" placeholder="" value="<?=$datodon[0]["r_otros_odon"]?>"/>
        </div> 
    </div> 
       
</div> 

<div class="form-group">
     <div class="col-lg-6">
          <label for="xxx" >OCLUSION Clasificacion de Angle Izquierda:</label>
          <select class="form-control input-sm" name="revision[clasif]" >
             <?if(!empty($datodon[0]["r_clasif_odon"])){?>
            <option select value="<?=$datodon[0]["r_clasif_odon"]?>"><?=$datodon[0]["r_clasif_odon"]?></option>
          <?}?>
            <option value="Clase 1">Clase 1</option>
            <option value="Clase 2">Clase 2</option>
            <option value="Clase 3">Clase 3</option>
            <option value="NO APLICA">NO APLICA</option>
          </select>
        </div>
<div class="form-group">
     <div class="col-lg-6">
          <label for="xxx" >OCLUSION Clasificacion de Angle Derecha:</label>
          <select class="form-control input-sm" name="revision[clasif2]" >
             <?if(!empty($datodon[0]["r_clasif_odon2"])){?>
            <option select value="<?=$datodon[0]["r_clasif_odon2"]?>"><?=$datodon[0]["r_clasif_odon2"]?></option>
          <?}?>
            <option value="Clase 1">Clase 1</option>
            <option value="Clase 2">Clase 2</option>
            <option value="Clase 3">Clase 3</option>
            <option value="NO APLICA">NO APLICA</option>
           </select>
        </div>
      </div>    
   </div>  

<div class="form-group">
        <div class="col-lg-6 ">
            <label for="descripcion" class="col-lg-2 control-label">Interferencias en Lateralidad</label>
            <div class="col-lg-8">
             <textarea name="revision[lateralidad]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_lateralidad_odon"]?></textarea>
          </div>
        </div>
    
        <div class="col-lg-6">
          <label for="descripcion" class="col-lg-2 control-label">Interferencias en Protrusiva</label>
          <div class="col-lg-8">
          <textarea name="revision[protrusiva]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_protrusiva_odon"]?></textarea>
          </div>       
        </div>
</div>    
<div class="form-group">
        <div class="col-lg-6">
          <label for="descripcion" class="col-lg-2 control-label">ATM</label>
          <div class="col-lg-8">
          <textarea name="revision[atm]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_atm_odon"]?></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <label for="descripcion" class="col-lg-2 control-label">Examen RX</label>
          <div class="col-lg-8">
          <textarea name="revision[examen_rx]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_examen_rx_odon"]?></textarea>
          </div>
        </div>

<div class="form-group">
        
        <div class="form-group">
     <div class="col-lg-6">
          <label for="xxx" >Clasificacion de Riesgo:</label>
          <select class="form-control input-sm" name="revision[clasif_ries]" >
             <?if(!empty($datodon[0]["r_clasif_ries_odon"])){?>
            <option select value="<?=$datodon[0]["r_clasif_ries_odon"]?>"><?=$datodon[0]["r_clasif_ries_odon"]?></option>
          <?}?>
            <option value="ALTO">ALTO</option>
            <option value="MEDIO">MEDIO</option>
            <option value="BAJO">BAJO</option>
          </select>
        </div>
       </div> 
        <div class="col-lg-6">
          <label for="descripcion" class="col-lg-2 control-label">Descripcion</label>
          <div class="col-lg-8">
          <textarea name="revision[descrip4]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datodon[0]["r_descrip4_odon"]?></textarea>
          </div>
         </div> 
        </div>
<div class="form-group">
        
        <div class="form-group">
     <div class="col-lg-6">
          <label for="xxx" >INDICE DE DEAN:</label>
          <select class="form-control input-sm" name="revision[dean]" >
             <?if(!empty($datodon[0]["dean"])){?>
            <option select value="<?=$datodon[0]["dean"]?>"><?=$datodon[0]["dean"]?></option>
          <?}?>
            <option value="NORMAL">NORMAL</option>
            <option value="NO APLICA">NO APLICA</option>
            <option value="DUDOSO">DUDOSO</option>
            <option value="MUY LEVE">MUY LEVE</option>
            <option value="MODERADO">MODERADO</option>
            <option value="SEVERO">SEVERO</option>
          </select>
        </div>
       </div> 
<div class="form-group">
        
        <div class="form-group">
     <div class="col-lg-6">
          <label for="xxx" >INDICE DE OLARY:</label>
          <select class="form-control input-sm" name="revision[oleary]" >
             <?if(!empty($datodon[0]["oleary"])){?>
            <option select value="<?=$datodon[0]["oleary"]?>"><?=$datodon[0]["oleary"]?></option>
          <?}?>
            <option value="ACEPTABLE">ACEPTABLE</option>
            <option value="NO APLICA">NO APLICA</option>
            <option value="CUESTIONABLE">CUESTIONABLE</option>
            <option value="DEFICIENTE">DEFICIENTE</option>
          </select>
        </div>
       </div> 
</div>           