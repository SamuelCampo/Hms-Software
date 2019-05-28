          <div class="col-lg-12 no-margin no-padding">
            <label for="hospitalizacion" class="control-label col-lg-2">No Aplica</label>
            <label class="col-lg-4">
              <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[aat][noaplica]","valor"=>"SI","actual"=>""),true)?>
            </label>
          </div>
          <div class="col-lg-12 no-margin no-padding">
            <div class="form-group no-margin no-padding">
              <label class="col-lg-2">Fecha</label>
              <label class="col-lg-2">Empresa</label>
              <label class="col-lg-2">Natualeza Lesión</label>
              <label class="col-lg-2">Parte Afectada</label>
              <label class="col-lg-1">Incapacidad</label>
              <label class="col-lg-2">Secuelas</label>
              <label class="col-lg-1">
                <a id="btnagregaraat" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
              </label>
            </div>
            <div class="col-lg-12" >
              <div class="form-group no-margin no-padding" id="cont_filaaat">
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control form_date" name="consultaso[aat][antacc_fec][]" />
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_empre][]" /> 
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_natulesi][]" /> 
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_partafec][]" /> 
                </div>
                <div class="col-lg-1 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_incap][]" /> 
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_secu][]" /> 
                </div>
                <div class="col-lg-1" onclick="$(this).parent().remove();">
                  <eliminar class="btn bg-navy btn-xs">
                    <span class="glyphicon glyphicon-trash btneliminar"></span>
                  </eliminar>
                </div>
              </div>
              <?if(is_array($datconsultaso->aat)){
              foreach($datconsultaso->aat as $aat){?>
              <div class="form-group no-margin no-padding" >
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control form_date" name="consultaso[aat][antacc_fec][]" value="<?=$aat->antacc_fec_t101?>" />
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_empre][]" value="<?=$aat->antacc_empre_t101?>" />
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_natulesi][]" value="<?=$aat->antacc_natulesi_t101?>" />
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_partafec][]" value="<?=$aat->antacc_partafec_t101?>" />
                </div>
                <div class="col-lg-1 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_incap][]" value="<?=$aat->antacc_incap_t101?>" />
                </div>
                <div class="col-lg-2 no-margin no-padding">
                  <input class="form-control" name="consultaso[aat][antacc_secu][]" value="<?=$aat->antacc_secu_t101?>" />
                </div>
                <div class="col-lg-1" onclick="$(this).parent().remove();">
                  <eliminar class="btn bg-navy btn-xs">
                    <span class="glyphicon glyphicon-trash btneliminar"></span>
                  </eliminar>
                </div>
              </div>
              <?}}?>
            </div>
          </div>

            