          <div class="col-lg-12">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-4">Tabaquismo</label>
                <label class="col-lg-1">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"hab_tabaquis","valor"=>"SI","actual"=>$datconsultaso->hab_tabaquis_t99),true)?>
                </label>
                <textarea name="hab_tabaquis_text" id="" class="from-control col-lg-4"></textarea>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-4">Alcohol</label>
                <label class="col-lg-1">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"hab_alcohol","valor"=>"SI","actual"=>$datconsultaso->hab_alcohol_t99),true)?>
                </label>
                <textarea name="hab_alcohol_text" id="" class="from-control col-lg-4"></textarea>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-4">Sicofarmacos </label>
                  <label class="col-lg-1">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"hab_sicofar","valor"=>"SI","actual"=>$datconsultaso->hab_sicofar_t99),true)?>
                  </label>
                  <textarea name="hab_sicofar_text" id="" class="from-control col-lg-4"></textarea>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-4">Deporte </label>
                <label class="col-lg-1">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"hab_deport","valor"=>"SI","actual"=>$datconsultaso->hab_deport_t99),true)?>
                </label>
                <textarea name="hab_deport_text" id="" class="from-control col-lg-4"></textarea>
              </div>
            </div>
          </div>