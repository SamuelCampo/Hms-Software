<?
  $arr_resist["rs_neurologico_t64"]=$datconsulta->rs_neurologico_t64;
  $arr_resist["rs_respiratorio_t64"]=$datconsulta->rs_respiratorio_t64;
  $arr_resist["rs_pielanexos_t64"]=$datconsulta->rs_pielanexos_t64;
  $arr_resist["rs_ojos_t64"]=$datconsulta->rs_ojos_t64;
  $arr_resist["rs_orl_t64"]=$datconsulta->rs_orl_t64;
  $arr_resist["rs_cuello_t64"]=$datconsulta->rs_cuello_t64;
  $arr_resist["rs_cardiovascular_t64"]=$datconsulta->rs_cardiovascular_t64;
  $arr_resist["rs_pulmonar_t64"]=$datconsulta->rs_pulmonar_t64;
  $arr_resist["rs_digestivo_t64"]=$datconsulta->rs_digestivo_t64;
  $arr_resist["rs_genitourinario_t64"]=$datconsulta->rs_genitourinario_t64;
  $arr_resist["rs_musculoesqueletico_t64"]=$datconsulta->rs_musculoesqueletico_t64;
  $arr_resist["rs_extremidades_t64"]=$datconsulta->rs_extremidades_t64;
  $arr_resist["rs_examen_mental_t64"]=$datconsulta->rs_examen_mental_t64;
  $arr_resist["rs_otros_t64"]=$datconsulta->rs_otros_t64;
  foreach($arr_resist as $camporvs=>$datorvs){
    if(empty($datorvs)){
      $arr_resist[$camporvs]='NO REFIERE';
    }
  }
?>
<fieldset>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="ojos">Ojos:</label>
        <input name="rs_ojos" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_ojos"  value="<?=$arr_resist["rs_ojos_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="orl">ORL:</label>
        <input name="rs_orl" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_orl"  value="<?=$arr_resist["rs_orl_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="cuello" >Cuello:</label>
        <input name="rs_cuello" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_cuello"  value="<?=$arr_resist["rs_cuello_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="digestivo">Digestivo:</label>
        <input name="rs_digestivo" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_digestivo"  value="<?=$arr_resist["rs_digestivo_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="cardiovascular">Cardio-Vascular:</label>
        <input name="rs_cardiovascular" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_cardiovascular"  value="<?=$arr_resist["rs_cardiovascular_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="rs_pulmonar" >Pulmonar:</label>
        <input name="rs_pulmonar" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_pulmonar"  value="<?=$arr_resist["rs_pulmonar_t64"]?>" required>
      </div>
    </div>
    
   <div class="form-group">
      <div class="col-lg-6">
        <label for="genitourinario" >Genito-Urinario:</label>
        <input name="rs_genitourinario" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_genitourinario"  value="<?=$arr_resist["rs_genitourinario_t64"]?>" required>
      </div>
     <div class="col-lg-6">
        <label for="musculoesqueletico">Musculo-Esqueletico:</label>
        <input name="rs_musculoesqueletico" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_musculoesqueletico"  value="<?=$arr_resist["rs_musculoesqueletico_t64"]?>" required>
      </div>
    </div>
  <div class="form-group">
      <div class="col-lg-6">
        <label for="extremidades" >Extremidades:</label>
        <input name="rs_extremidades" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_neurologico"  value="<?=$arr_resist["rs_extremidades_t64"]?>" required>
      </div>
     <div class="col-lg-6">
        <label for="rs_neurologico" >Neurologico:</label>
        <input name="rs_neurologico" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_neurologico"  value="<?=$arr_resist["rs_neurologico_t64"]?>" required>
      </div>
    </div>
   <div class="form-group">
     <div class="col-lg-6">
        <label for="pielanexos">Piel y Anexos:</label>
        <input name="rs_pielanexos" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_pielanexos"  value="<?=$arr_resist["rs_pielanexos_t64"]?>" required>
      </div>
      <div class="form-group">
     <div class="col-lg-6">
        <label for="salud_mental">Salud Mental:</label>
        <input name="rs_examen_mental_t64" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_examen_mental_t64"  value="<?=$arr_resist["rs_examen_mental_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="otros" >Otros:</label>
        <input name="rs_otros" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_otros"  value="<?=$arr_resist["rs_otros_t64"]?>">
      </div>
    </div>
    
  <br/><br/>
</fieldset>