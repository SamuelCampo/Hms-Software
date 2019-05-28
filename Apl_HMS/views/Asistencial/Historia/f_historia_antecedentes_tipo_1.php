<?
  //var_dump($datantec); exit;
?>
<div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="alergias" class="control-label col-lg-8">Alergias</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alergias]","valor"=>"SI","actual"=>$datantec->alergias_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="hipertension" class="control-label col-lg-8">Hipertensión</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hipertension]","valor"=>"SI","actual"=>$datantec->hipertension_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="asma" class="control-label col-lg-8">Asma</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][asma]","valor"=>"SI","actual"=>$datantec->asma_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="cancer" class="control-label col-lg-8">Cancer</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][cancer]","valor"=>"SI","actual"=>$datantec->cancer_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="cardiovascular" class="control-label col-lg-8">Cardiovascular.</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][cardiovascular]","valor"=>"SI","actual"=>$datantec->cardiovascular_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="diabetes" class="control-label col-lg-8">Diabetes</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][diabetes]","valor"=>"SI","actual"=>$datantec->diabetes_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="dijestivas" class="control-label col-lg-8">Enf.Digestivas</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][dijestivas]","valor"=>"SI","actual"=>$datantec->dijestivas_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="renales" class="control-label col-lg-8">Enf.Renales</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][renales]","valor"=>"SI","actual"=>$datantec->renales_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="neuromental" class="control-label col-lg-8">Alergias alimentarias</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][alegaliment]","valor"=>"SI","actual"=>$datantec->alegaliment_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="sifilis" class="control-label col-lg-8">Cardiopatias</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][cardiopatias]","valor"=>"SI","actual"=>$datantec->cardiopatias_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="tbc" class="control-label col-lg-8">T.B.C</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][tbc]","valor"=>"SI","actual"=>$datantec->tbc_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="acv" class="control-label col-lg-8">A.C.V</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][acv]","valor"=>"SI","actual"=>$datantec->acv_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-3">
                  <label for="alzaimer" class="control-label col-lg-8">Enf. cronicas</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][enfcronicas]","valor"=>"SI","actual"=>$datantec->enfcronicas_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="hepatitis" class="control-label col-lg-8">Hepatitis</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][hepatitis]","valor"=>"SI","actual"=>$datantec->hepatitis_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="lupus" class="control-label col-lg-8">Enf. venereas</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][enfvenereas]","valor"=>"SI","actual"=>$datantec->enfvenereas_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
                <div class="col-lg-3">
                  <label for="artritis" class="control-label col-lg-8">Artritis Reumat.</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[".$tipoantec."][artritis]","valor"=>"SI","actual"=>$datantec->artritis_t65,"disabled"=>$deshabingmed),true)?>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <label for="descripcion" class="col-lg-2 control-label">Descripción</label>
                <div class="col-lg-8">
                  <textarea name="antecedentes[<?=$tipoantec;?>][descripcion]" class="form-control <?=$deshabingmed?>" rows="4" id="descripcion" required><?=$datantec->descripcion_t65?></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-2"></div>
                <label for="otros" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-8">
                  <input name="antecedentes[<?=$tipoantec;?>][otros]" type="text" class="form-control <?=$deshabingmed?>" id="otros" placeholder="" value="<?=$datantec->otros_t65?>"/>
                </div>
              </div>
            </div>
        </div>