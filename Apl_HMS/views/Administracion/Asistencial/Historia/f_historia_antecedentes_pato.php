          <div class="row">
            <div class="col-lg-6">
              <h4 class="text-center">Antecedentes Hospitalarios</h4>
              <div class="form-group">
                <div class="col-lg-6">
                  <label for="hospitalizacion" class="control-label col-lg-8">Hospitalizaciones</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][hospitalizacion]","valor"=>"SI","actual"=>$datconsulta->hospitalizacion_t66),true)?>
                  </label>
                </div>
                <div class="col-lg-6">
                  <label for="emergencia" class="control-label col-lg-8">Emergencias</label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][emergencia]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  </label>
                </div>
              </div>
              <div class="col-lg-6">
                  <label for="cronicas" class="control-label col-lg-8">Transfusiones </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][transfusiones]","valor"=>"SI","actual"=>$datconsulta->transfusiones_t66),true)?>
              </div>
            </div>
            <div class="col-lg-6">
              <h4 class="text-center">Hábitos Psicobiológicos</h4>
              <div class="form-group">
                <div class="col-lg-6">
                  <label for="alcohol" class="control-label">Alcohol</label>
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alcohol]","valor"=>"SI","actual"=>$datconsulta->alcohol_t66),true)?>
                </div>
                <div class="col-lg-6">
                  <label for="tabaco" class="control-label">Tabaco</label>
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][tabaco]","valor"=>"SI","actual"=>$datconsulta->tabaco_t66),true)?>
                </div>
                <div class="col-lg-6">
                  <label for="deporte" class="control-label">Cafeicos y Te</label>
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][cafeicos]","valor"=>"SI","actual"=>$datconsulta->cafeicos_t66),true)?>
                </div>
                <div class="col-lg-6">
                  <label for="drogas" class="control-label">Drogas</label>
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][drogas]","valor"=>"SI","actual"=>$datconsulta->drogas_t66),true)?>
                </div>
                <div class="col-lg-6">
                  <label for="drogas" class="control-label">Deportes</label>
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][deporte]","valor"=>"SI","actual"=>$datconsulta->deporte_t66),true)?>
                </div>
              </div>
            </div>
              <br/><br/><br/><br/><br/><br/><br/><br/><br/>
              <div class="form-group">
                <label for="descripcion2" class="col-lg-2 control-label">Descripción</label>
                <div class="col-lg-4">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion2]" class="form-control" rows="4" id="descripcion2" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="otros2" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-4">
                  <input name="antecedentes[PATOLOGICOS][otros2]" type="text" class="form-control" id="otros2" placeholder="">
                </div>
              </div>
            </div>
     
