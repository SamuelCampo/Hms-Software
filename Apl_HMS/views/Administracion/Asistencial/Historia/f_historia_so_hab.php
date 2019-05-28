          <div class="col-lg-12">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Tabaquismo</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[hab_tabaquis]","valor"=>"SI","actual"=>$datconsultaso->hab_tabaquis_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Alcohol</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[hab_alcohol]","valor"=>"SI","actual"=>$datconsultaso->hab_alcohol_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Sicofarmacos </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[hab_sicofar]","valor"=>"SI","actual"=>$datconsultaso->hab_sicofar_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Deporte </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[hab_deport]","valor"=>"SI","actual"=>$datconsultaso->hab_deport_t99),true)?>
                </label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Observaciones</label>
                <textarea name="consultaso[hab_obser]" class="form-control"><?=$datconsultaso->hab_obser_t99?></textarea>
              </div>
            </div>
          </div>