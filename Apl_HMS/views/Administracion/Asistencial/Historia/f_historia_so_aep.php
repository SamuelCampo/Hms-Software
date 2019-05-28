          <div class="col-lg-12 no-margin no-padding">
            <label for="hospitalizacion" class="control-label col-lg-2">No Aplica</label>
            <label class="col-lg-4">
              <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[aep][noaplica]","valor"=>"SI","actual"=>""),true)?>
            </label>
          </div>
          <div class="col-lg-12 no-margin no-padding">
            <div class="form-group no-margin no-padding">
              <label class="col-lg-3">Fecha Calificación</label>
              <label class="col-lg-3">Empresa</label>
              <label class="col-lg-2">DX</label>
              <label class="col-lg-3">Entidad Calificadora</label>
              <label class="col-lg-1">
                <a id="btnagregaraep" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
              </label>
            </div>
            <div class="form-group no-margin no-padding" id="cont_filaaep">
                <div class="col-lg-3 no-margin no-padding">
                  <input class="form-control form_date"  name="consultaso[aep][antenf_feccal][]" /> 
                </div>
                <div class="col-lg-3 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_empre][]" />
                </div>
                <div class="col-lg-2 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_dx][]" />
                </div>
                <div class="col-lg-3 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_entcalif][]" />
                </div>
                <div class="col-lg-1" onclick="$(this).parent().remove();">
                  <eliminar class="btn bg-navy btn-xs">
                    <span class="glyphicon glyphicon-trash btneliminar"></span>
                  </eliminar>
                </div>
              </div>
            <?if(is_array($datconsultaso->aep)){
              foreach($datconsultaso->aep as $aep){?>
            <div class="form-group no-margin no-padding" >
                <div class="col-lg-3 no-margin no-padding">
                  <input class="form-control form_date" name="consultaso[aep][antenf_feccal][]" value="<?=$aep->antenf_feccal_t109?>" /> 
                </div>
                <div class="col-lg-3 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_empre][]" value="<?=$aep->antenf_empre_t109?>" />
                </div>
                <div class="col-lg-2 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_dx][]" value="<?=$aep->antenf_dx_t109?>" />
                </div>
                <div class="col-lg-3 no-margin no-padding"  /> 
                  <input class="form-control" name="consultaso[aep][antenf_entcalif][]" value="<?=$aep->antenf_entcalif_t109?>" />
                </div>
                <div class="col-lg-1" onclick="$(this).parent().remove();">
                  <eliminar class="btn bg-navy btn-xs">
                    <span class="glyphicon glyphicon-trash btneliminar"></span>
                  </eliminar>
                </div>
              </div>
            <?}}?>
          </div>

            