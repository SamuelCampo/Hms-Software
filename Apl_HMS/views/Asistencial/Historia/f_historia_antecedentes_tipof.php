<?
  //var_dump($datantec); exit;
?>
<div class="row">
      <div class="col-lg-12">
        <div class="form-group">
          <div class="col-lg-2">
            <label for="patologicos" class="control-label col-lg-8">Patológicos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][patologias]" id="patologias" value="<?=$datconsulta->datantfam->patologias_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
          <div class="col-lg-3">
            <label for="quirurgicos" class="control-label col-lg-8">Qirúrgicos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][quirurgicos]" id="quirur" value="<?=$datconsulta->datantfam->quirurgicos_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
          <div class="col-lg-3">
            <label for="traumaticos" class="control-label col-lg-8">Traumáticos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][traumat]" id="traumat" value="<?=$datconsulta->datantfam->traumat_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
          <div class="col-lg-3">
            <label for="alergicos" class="control-label col-lg-8">Toxico Alérgicos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][alergias]" id="alerg" value="<?=$datconsulta->datantfam->alergias_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
        </div><br>
        <div class="form-group">
          <div class="col-lg-2">
            <label for="inmunologicos" class="control-label col-lg-8">Inmunológicos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][inmunologicos]" id="inmun" value="<?=$datconsulta->datantfam->inmunologicos_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
          <div class="col-lg-3">
            <label for="Medicamentoso" class="control-label col-lg-8">Farmacos</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][farmacologicos]" id="medic" value="<?=$datconsulta->datantfam->farmacologicos_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
            <div class="col-lg-3">
            <label for="otros" class="control-label col-lg-8">Otros</label>
            <label class="col-lg-4">
                <input type="text" name="antecedentes[FAMILIARES][otros]" id="otros" value="<?=$datconsulta->datantfam->otros_t65 ?: "NO REFIERE"?>" >
            </label>
          </div>
        </div>
  </div>
</div>