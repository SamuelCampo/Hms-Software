          <div class="row">
            <div class="col-lg-12">
              <input type="hidden" name="antecedentes[<?=$tipoantec;?>][tipo]" value="<?=$tipoantec;?>"/>
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="alergias" class="control-label">Alergias</label>
                  <label class="checkbox-inline">
                    <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datconsulta->alergia_t65),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="hipertension" class="control-label">Hipertensión</label>
                  <label class="checkbox-inline">
                    <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hipertension]","valor"=>"SI","actual"=>$datconsulta->hipertension_t65),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][asma]","valor"=>"SI","actual"=>$datconsulta->asma_t65),true)?>
                  <label for="asma" class="control-label">Asma</label>
                </div>
                <div class="col-lg-3">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][cancer]","valor"=>"SI","actual"=>$datconsulta->cancer_t65),true)?>
                  <label for="cancer" class="control-label">Cancer</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][cardiovascular]","valor"=>"SI","actual"=>$datconsulta->cardiovascular_t65),true)?>
                  <label for="cardiovascular" class="control-label">Cardiovasculares</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][diabetes]","valor"=>"SI","actual"=>$datconsulta->diabetes_t65),true)?>
                  <label for="diabetes" class="control-label">Diabetes</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][dijestivas]","valor"=>"SI","actual"=>$datconsulta->dijestivas_t65),true)?>
                  <label for="dijestivas" class="control-label">Enf.Digestivas</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][renales]","valor"=>"SI","actual"=>$datconsulta->renales_t65),true)?>
                  <label for="renales" class="control-label">Enf.Renales</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][neuromental]","valor"=>"SI","actual"=>$datconsulta->neuromental_t65),true)?>
                  <label for="neuromental" class="control-label">Neuromentales</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][sifilis]","valor"=>"SI","actual"=>$datconsulta->sifilis_t65),true)?>
                  <label for="sifilis" class="control-label">Sifilis</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][tbc]","valor"=>"SI","actual"=>$datconsulta->tbc_t65),true)?>
                  <label for="tbc" class="control-label">T.B.C</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][acv]","valor"=>"SI","actual"=>$datconsulta->acv_t65),true)?>
                  <label for="acv" class="control-label">A.C.V</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alzaimer]","valor"=>"SI","actual"=>$datconsulta->alzaimer_t65),true)?>
                  <label for="alzaimer" class="control-label">Alzaimer</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hepatitis]","valor"=>"SI","actual"=>$datconsulta->hepatitis_t65),true)?>
                  <label for="hepatitis" class="control-label">Hepatitis</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][lupus]","valor"=>"SI","actual"=>$datconsulta->lupus_t65),true)?>
                  <label for="lupus" class="control-label">Lupus</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][psoriasis]","valor"=>"SI","actual"=>$datconsulta->psoriasis_t65),true)?>
                  <label for="psoriasis" class="control-label">Psoriasis</label>
                </div>
                <div class="col-lg-2">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][artritis]","valor"=>"SI","actual"=>$datconsulta->artritis_t65),true)?>
                  <label for="artritis" class="control-label">Artritis Reumat.</label>
                </div>
              </div>
              <br/>
              <div class="form-group">
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-lg-8">
                  <textarea name="antecedentes[<?=$tipoantec;?>][descripcion]" class="form-control" rows="4" id="descripcion"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="otros" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-8">
                  <input name="antecedentes[<?=$tipoantec;?>][otros]" type="text" class="form-control" id="otros" placeholder=""/>
                </div>
              </div>
            </div>
        </div>