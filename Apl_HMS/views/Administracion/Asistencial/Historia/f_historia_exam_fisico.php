<?
  $arr_exfisc["neurologico_t64"]=$datconsulta->neurologico_t64;
  $arr_exfisc["respiratorio_t64"]=$datconsulta->respiratorio_t64;
  $arr_exfisc["pielanexos_t64"]=$datconsulta->pielanexos_t64;
  $arr_exfisc["ojos_t64"]=$datconsulta->ojos_t64;
  $arr_exfisc["orl_t64"]=$datconsulta->orl_t64;
  $arr_exfisc["cuello_t64"]=$datconsulta->cuello_t64;
  $arr_exfisc["cardiovascular_t64"]=$datconsulta->cardiovascular_t64;
  $arr_exfisc["pulmonar_t64"]=$datconsulta->pulmonar_t64;
  $arr_exfisc["digestivo_t64"]=$datconsulta->digestivo_t64;
  $arr_exfisc["genitourinario_t64"]=$datconsulta->genitourinario_t64;
  $arr_exfisc["musculoesqueletico_t64"]=$datconsulta->musculoesqueletico_t64;
  $arr_exfisc["extremidades_t64"]=$datconsulta->extremidades_t64;
  $arr_exfisc["otros_t64"]=$datconsulta->otros_t64;
  foreach($arr_exfisc as $campoexfis=>$datoexfis){
    if(empty($datoexfis)){
      $arr_exfisc[$campoexfis]='SIN ALTERACIONES'; //pendiente descripción
    }
  }
?>
  <fieldset>
    <div class="form-group">
      <div class="col-lg-6"> 
        <label for="neurologico" >Grupo Especial:</label>
        <select class="form-control input-sm" name="grupoespecial" >
          <option></option>
        <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_grupoespec,"grupo","grupo",$datpaciente->grupoespec_t3))?>
        </select>
      </div>
      <div class="col-lg-6">
        <label for="respiratorio">Discapacidad:</label>
        <select class="form-control input-sm" name="discapacidad" >
          <option></option>
        <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Paciente->arr_discapac,"disca","disca",$datpaciente->discap_t3))?>
        </select>
      </div>
    </div>
    
    <div class="form-group">
      
      <div class="col-lg-6">
        <label for="ojos">Ojos:</label>
        <input name="ojos" <?=$deshabingmed?> type="text" class="form-control input-sm" id="ojos"  value="<?=$arr_exfisc["ojos_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="orl">ORL:</label>
        <input name="orl" <?=$deshabingmed?> type="text" class="form-control input-sm" id="orl"  value="<?=$arr_exfisc["orl_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      
      <div class="col-lg-6">
        <label for="cuello" >Cuello:</label>
        <input name="cuello" <?=$deshabingmed?> type="text" class="form-control input-sm" id="cuello"  value="<?=$arr_exfisc["cuello_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="cardiovascular">Cardio-Vascular:</label>
        <input name="cardiovascular" <?=$deshabingmed?> type="text" class="form-control input-sm" id="cardiovascular"  value="<?=$arr_exfisc["cardiovascular_t64"]?>" required>
      </div>
      
    </div>
    <div class="form-group">
      
      <div class="col-lg-6">
        <label for="pulmonar" >Pulmonar:</label>
        <input name="pulmonar" <?=$deshabingmed?> type="text" class="form-control input-sm" id="pulmonar"  value="<?=$arr_exfisc["pulmonar_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="digestivo">Digestivo:</label>
        <input name="digestivo" <?=$deshabingmed?> type="text" class="form-control input-sm" id="digestivo"  value="<?=$arr_exfisc["digestivo_t64"]?>" required>
      </div>
    </div>
   <div class="form-group">
      
      <div class="col-lg-6">
        <label for="genitourinario" >Genito-Urinario:</label>
        <input name="genitourinario" <?=$deshabingmed?> type="text" class="form-control input-sm" id="genitourinario"  value="<?=$arr_exfisc["genitourinario_t64"]?>" required>
      </div>
     <div class="col-lg-6">
        <label for="musculoesqueletico">Musculo-Esqueletico:</label>
        <input name="musculoesqueletico" <?=$deshabingmed?> type="text" class="form-control input-sm" id="musculoesqueletico"  value="<?=$arr_exfisc["musculoesqueletico_t64"]?>" required>
      </div>
    </div>
   <div class="form-group">
      
      <div class="col-lg-6">
        <label for="extremidades" >Extremidades:</label>
        <input name="extremidades" <?=$deshabingmed?> type="text" class="form-control input-sm" id="neurologico"  value="<?=$arr_exfisc["extremidades_t64"]?>" required>
      </div>
     <div class="col-lg-6">
        <label for="neurologico" >Neurologico:</label>
        <input name="neurologico" <?=$deshabingmed?> type="text" class="form-control input-sm" id="neurologico"  value="<?=$arr_exfisc["neurologico_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">

      <div class="col-lg-6">
        <label for="pielanexos">Piel y Anexos:</label>
        <input name="pielanexos" <?=$deshabingmed?> type="text" class="form-control input-sm" id="pielanexos"  value="<?=$arr_exfisc["pielanexos_t64"]?>" required>
      </div>
    <div class="col-lg-6">
        <label for="Abdomen">Estado General:</label>
        <input name="Abdomen" <?=$deshabingmed?> type="text" class="form-control input-sm" id="pielanexos"  value="<?=$arr_exfisc["pielanexos_t64"]?>" required>
      </div>

      <div class="col-lg-6">
        <label for="otros" >Otros:</label>
        <input name="otros" <?=$deshabingmed?> type="text" class="form-control input-sm" id="otros"  value="<?=$arr_exfisc["otros_t64"]?>">
      </div>
    </div>

    <?=$this->load->view('Asistencial/Historia/f_historia_exam_fisico_pod',"",true);?>

    
    <br/><br/>
</fieldset>