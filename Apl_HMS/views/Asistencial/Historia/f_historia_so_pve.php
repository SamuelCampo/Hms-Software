          <div class="col-lg-12">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Auditivo</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_audit]","valor"=>"SI","actual"=>$datconsultaso->pvepi_audit_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Visual</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_visual]","valor"=>"SI","actual"=>$datconsultaso->pvepi_visual_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Ergonómico </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_ergono]","valor"=>"SI","actual"=>$datconsultaso->pvepi_ergono_t99),true)?>
                  </label>
              </div>
              
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Respiratorio </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_resp]","valor"=>"SI","actual"=>$datconsultaso->pvepi_resp_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Psicolaboral</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_psico]","valor"=>"SI","actual"=>$datconsultaso->pvepi_psico_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">De altas temperaturas</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_dealtatem]","valor"=>"SI","actual"=>$datconsultaso->pvepi_dealtatem_t99),true)?>
                </label>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">De Riesgos Químicos </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_riequimico]","valor"=>"SI","actual"=>$datconsultaso->pvepi_riequimico_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">De Plaguicidas</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_plagui]","valor"=>"SI","actual"=>$datconsultaso->pvepi_plagui_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">De Riesgo Cardiovascular</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[pvepi_riescard]","valor"=>"SI","actual"=>$datconsultaso->pvepi_riescard_t99),true)?>
                </label>
              </div>
            </div>
          </div>