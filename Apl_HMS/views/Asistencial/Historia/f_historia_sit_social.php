<?php  foreach($arr_resist as $camporvs=>$datorvs){
    if(empty($datorvs)){
      $arr_resist[$camporvs]='NO REFIERE';
    }
  } ?>
<fieldset>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="ojos">El paciente convive con:</label>
        <input name="convive" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_ojos"  value="<?=$arr_resist["rs_ojos_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="orl">Su situaci&oacute;n Laboral</label>
        <input name="labora" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_orl"  value="<?=$arr_resist["rs_orl_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="cuello" >La ocupaci&oacute;n es</label>
        <input name="ocupacion" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_cuello"  value="<?=$arr_resist["rs_cuello_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="digestivo">Para acceder a su vivienda habitual dispone de</label>
        <input name="vivienda" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_digestivo"  value="<?=$arr_resist["rs_digestivo_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="cardiovascular">Utiliza ayuda/s t&eacute;cnica/s</label>
        <input name="ayuda" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_cardiovascular"  value="<?=$arr_resist["rs_cardiovascular_t64"]?>" required>
      </div>
    </div>
    
  <br/><br/>
</fieldset>