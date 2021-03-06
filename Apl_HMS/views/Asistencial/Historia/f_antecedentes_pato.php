          <div class="row">
            <div class="col-lg-6">
              <h4 class="text-center">Antecedentes Patol�gicos</h4>
              <input type="hidden" name="antecedentes[PATOLOGICOS][tipo]" value="PATOLOGICOS" />
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][hospitalizacion]","valor"=>"SI","actual"=>$datconsulta->hospitalizacion_t66),true)?>
                  <label for="hospitalizacion" class="control-label">Hospitalizaciones</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][emergencia]","valor"=>"SI","actual"=>$datconsulta->emergencia_t66),true)?>
                  <label for="emergencia" class="control-label">Emergencias</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][cronicas]","valor"=>"SI","actual"=>$datconsulta->cronicas_t66),true)?>
                  <label for="cronicas" class="control-label">Enf.Cr�nicas</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][venerias]","valor"=>"SI","actual"=>$datconsulta->venerias_t66),true)?>
                  <label for="venerias" class="control-label">Enf.Venereas</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][cardiopatias]","valor"=>"SI","actual"=>$datconsulta->cardiopatias_t66),true)?>
                  <label for="cardiopatias" class="control-label">Cardiopatias</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alergiaalim]","valor"=>"SI","actual"=>$datconsulta->alergiaalim_t66),true)?>
                  <label for="alergiaalim" class="control-label">Alergia Alimentaria</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alergias]","valor"=>"SI","actual"=>$datconsulta->transfusion_t66),true)?>
                  <label for="alergias" class="control-label">Transfusiones</label>
                </div>
              </div>
              <br/>
              <div class="form-group">
                <label for="descripcion1" class="col-lg-2 control-label">Descripci�n</label>
                <div class="col-lg-8">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion1]" class="form-control" rows="4" id="descripcion1"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="otros1" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-8">
                  <input name="antecedentes[PATOLOGICOS][otros1]" type="text" class="form-control" id="otros1" placeholder=""/>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h4 class="text-center">H�bitos Psicobiol�gicos</h4>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][alcohol]","valor"=>"SI","actual"=>$datconsulta->alcohol_t66),true)?>
                  <label for="alcohol" class="control-label">Alcohol</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][deporte]","valor"=>"SI","actual"=>$datconsulta->deporte_t66),true)?>
                  <label for="deporte" class="control-label">Deporte</label>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][drogas]","valor"=>"SI","actual"=>$datconsulta->drogas_t66),true)?>
                  <label for="drogas" class="control-label">Drogas</label>
                </div>
                <div class="col-lg-6">
                  <?=$this->load->view('Genericas/gen_radio_check',array("tipo"=>"checkbox","nombre"=>"antecedentes[PATOLOGICOS][tabaco]","valor"=>"SI","actual"=>$datconsulta->tabaco_t66),true)?>
                  <label for="tabaco" class="control-label">Tabaco</label>
                </div>
              </div>
              <br/>
              <div class="form-group">
                <label for="descripcion2" class="col-lg-2 control-label">Descripci�n</label>
                <div class="col-lg-8">
                  <textarea name="antecedentes[PATOLOGICOS][descripcion2]" class="form-control" rows="4" id="descripcion2"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="otros2" class="col-lg-2 control-label">Otros</label>
                <div class="col-lg-8">
                  <input name="antecedentes[PATOLOGICOS][otros2]" type="text" class="form-control" id="otros2" placeholder="">
                </div>
              </div>
              
            </div>
          </div>
