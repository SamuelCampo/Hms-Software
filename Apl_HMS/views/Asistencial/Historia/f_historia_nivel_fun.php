<?php  foreach($arr_resist as $camporvs=>$datorvs){
    if(empty($datorvs)){
      $arr_resist[$camporvs]='NO REFIERE';
    }
  } ?>
<fieldset>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="ojos">El paciente presenta dificultad en:</label>
        <input name="fun_1" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_ojos"  value="<?=$arr_resist["rs_ojos_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="orl">El paciente presenta dificultad para el autocuidado en:</label>
        <input name="fun_dos" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_orl"  value="<?=$arr_resist["rs_orl_t64"]?>" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6">
        <label for="cuello" >El paciente presenta dificultad para las actividades del hogar en:</label>
        <input name="fun_tres" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_cuello"  value="<?=$arr_resist["rs_cuello_t64"]?>" required>
      </div>
      <div class="col-lg-6">
        <label for="digestivo">El paciente presenta dificultad para las actividades sociales en:</label>
        <input name="fun_for" <?=$deshabingmed?> type="text" class="form-control input-sm" id="rs_digestivo"  value="<?=$arr_resist["rs_digestivo_t64"]?>" required>
      </div>
    </div>
    
  <br/><br/>
</fieldset>