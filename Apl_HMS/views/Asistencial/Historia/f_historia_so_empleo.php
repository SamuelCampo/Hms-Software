<?
  //var_dump($datconsultaso->emp);
  //exit;
?>
          <div class="col-lg-12 no-margin no-padding">
            <h4 class="text-center no-margin no-padding">Empleo Actual</h4>
            <div class="form-group">
              <div class="col-lg-6">
                <label for="hospitalizacion" class="control-label">Empleador</label>
                <input type="text" class="form-control tercdesc" value="<?=$datconsultaso->emact_emplea_t99?>" name="consultaso[emact_emplea]" />
                <input type="hidden" value="<?=$datconsultaso->emact_empleaidentif_t99?>" name="consultaso[emact_empleaidentif]" />
              </div>
              <div class="col-lg-6">
                <label for="hospitalizacion" class="control-label">Actividad Económica</label>
      <input type="text" class="form-control" id="acteconomica" value="<?=$datconsultaso->emact_actiecon_t99?>" name="consultaso[emact_actiecon]" />
 
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-3">
                <label for="hospitalizacion" class="control-label">Cargo</label>
    <input type="text" class="form-control" value="<?=$datconsultaso->emact_cargo_t99?>" name="consultaso[emact_cargo]" />
              </div>
              <div class="col-lg-3">
                <label for="hospitalizacion" class="control-label">Sección</label>
                <input type="text" class="form-control" value="<?=$datconsultaso->emact_secc_t99?>" name="consultaso[emact_secc]" />
              </div>
              <div class="col-lg-3">
                <label for="hospitalizacion" class="control-label">Turno</label>
                Diurno <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"radio","nombre"=>"consultaso[emact_turno]","valor"=>"DIURNO","actual"=>$datconsultaso->emact_turno_t99),true)?>
                Nocturno <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"radio","nombre"=>"consultaso[emact_turno]","valor"=>"NOCTURNO","actual"=>$datconsultaso->emact_turno_t99),true)?>
                Mixto <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"radio","nombre"=>"consultaso[emact_turno]","valor"=>"MIXTO","actual"=>$datconsultaso->emact_turno_t99),true)?>
                Rotativo <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"radio","nombre"=>"consultaso[emact_turno]","valor"=>"ROTATIVO","actual"=>$datconsultaso->emact_turno_t99),true)?>
              </div>
              <div class="col-lg-3">
                <label for="hospitalizacion" class="control-label">Ingreso Empresa</label>
                <input type="text" class="form-control" value="<?=$datconsultaso->emact_ingremp_t99?>" name="consultaso[emact_ingremp]" />
              </div>
            </div>
          </div>
          <div class="col-lg-12 no-margin no-padding">
            <h4 class="text-center no-margin no-padding">Empleos Anteriores</h4>
            <div class="form-group no-margin no-padding">
              <label class="col-lg-3">Empleador</label>
              <label class="col-lg-1">Tiempo</label>
              <label class="col-lg-3">Cargo</label>
              <label class="col-lg-2">Factores de Riesgo</label>
              <label class="col-lg-2">Fin</label>
              <label class="col-lg-1">
                <a id="btnagregaremp" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
              </label>
            </div>
            <div class="form-group no-margin no-padding" id="cont_filaemp">
              <div class="col-lg-3 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_ample][]" />
              </div>
              <div class="col-lg-1 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_tiemp][]" />
              </div>
              <div class="col-lg-3 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_carg][]" />
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_fact][]" />
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input class="form-control form_date"  name="consultaso[emp][empant_fin][]" />
              </div>
              <div class="col-lg-1" onclick="$(this).parent().remove();"> 
                <eliminar class="btn bg-navy btn-xs">
                  <span class="glyphicon glyphicon-trash btneliminar"></span>
                </eliminar>
              </div>
            </div>
            <?if(is_array($datconsultaso->emp)){
              foreach($datconsultaso->emp as $empleo){?>
            <div class="form-group no-margin no-padding">
              <div class="col-lg-3 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_ample][]" value="<?=$empleo->empant_ample_t100?>" />
              </div>
              <div class="col-lg-1 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_tiemp][]" value="<?=$empleo->empant_tiemp_t100?>" />
              </div>
              <div class="col-lg-3 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_carg][]" value="<?=$empleo->empant_carg_t100?>" />
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input class="form-control" name="consultaso[emp][empant_fact][]" value="<?=$empleo->empant_fact_t100?>" />
              </div>
              <div class="col-lg-2 no-margin no-padding">
                <input class="form-control form_date"  name="consultaso[emp][empant_fin][]" value="<?=$empleo->empant_fin_t100?>" />
              </div>
              <div class="col-lg-1" onclick="$(this).parent().remove();"> 
                <eliminar class="btn bg-navy btn-xs">
                  <span class="glyphicon glyphicon-trash btneliminar"></span>
                </eliminar>
              </div>
            </div>
              <?}}?>
          </div>

            