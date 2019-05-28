          <div class="col-lg-12">
            <div class="col-lg-4">
              <h4 class="text-center">Físicos</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Iluminación deficiente</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_iludef]","valor"=>"SI","actual"=>$datconsultaso->frfis_iludef_t99	),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Iluminación Excesiva</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_iluexc]","valor"=>"SI","actual"=>$datconsultaso->frfis_iluexc_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Ruido </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_rui]","valor"=>"SI","actual"=>$datconsultaso->frfis_rui_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Radiaciones no Oinizantes </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_radnoion]","valor"=>"SI","actual"=>$datconsultaso->frfis_radnoion_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Tempraturas Extremas </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_temext]","valor"=>"SI","actual"=>$datconsultaso->frfis_temext_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Vibraciones </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frfis_vibra]","valor"=>"SI","actual"=>$datconsultaso->frfis_vibra_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frfis_obs]" value="<?=$datconsultaso->frfis_obs_t99?>" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">Quimicos</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Polvos</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frqui_polv]","valor"=>"SI","actual"=>$datconsultaso->frqui_polv_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Humos</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frqui_humos]","valor"=>"SI","actual"=>$datconsultaso->frqui_humos_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Gases </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frqui_gases]","valor"=>"SI","actual"=>$datconsultaso->frqui_gases_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Material Particulado </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frqui_matpart]","valor"=>"SI","actual"=>$datconsultaso->frqui_matpart_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Líquidos </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frqui_liqui]","valor"=>"SI","actual"=>$datconsultaso->frqui_liqui_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frqui_obs]" value="<?=$datconsultaso->frqui_obs_t99?>" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">Psicosociales</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Carga Mental</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frpsi_cargment]","valor"=>"SI","actual"=>$datconsultaso->frpsi_cargment_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Cantidad de Trabajo</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frpsi_canttrab]","valor"=>"SI","actual"=>$datconsultaso->frpsi_canttrab_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Nivel de Resposabilidad del Cargo </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frpsi_nivresp]","valor"=>"SI","actual"=>$datconsultaso->frpsi_nivresp_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Condiciones de la Empresa </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frpsi_condemp]","valor"=>"SI","actual"=>$datconsultaso->frpsi_condemp_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Condiciones Individuales </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frpsi_condind]","valor"=>"SI","actual"=>$datconsultaso->frpsi_condind_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frpsi_obs]" value="<?=$datconsultaso->frpsi_obs_t99?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="col-lg-4">
              <h4 class="text-center">Biológicos</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Virus</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frbio_virus]","valor"=>"SI","actual"=>$datconsultaso->frbio_virus_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Bacterias</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frbio_bact]","valor"=>"SI","actual"=>$datconsultaso->frbio_bact_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Hongos </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frbio_hong]","valor"=>"SI","actual"=>$datconsultaso->frbio_hong_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Parásitos </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frbio_paras]","valor"=>"SI","actual"=>$datconsultaso->frbio_paras_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frbio_obs]" value="<?=$datconsultaso->frbio_obs_t99?>" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">De Seguridad</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Eléctricos</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frseg_elect]","valor"=>"SI","actual"=>$datconsultaso->frseg_elect_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Mecánicos</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frseg_mecan]","valor"=>"SI","actual"=>$datconsultaso->frseg_mecan_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Locativos </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frseg_locat]","valor"=>"SI","actual"=>$datconsultaso->frseg_locat_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Explosión </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frseg_explo]","valor"=>"SI","actual"=>$datconsultaso->frseg_explo_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Atrapamiento </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frseg_atra]","valor"=>"SI","actual"=>$datconsultaso->frseg_atra_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frseg_obs]" value="<?=$datconsultaso->frseg_obs_t99?>" />
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">Ergonómicos</h4>
              <div class="form-group">
                <label for="hospitalizacion" class="control-label col-lg-8">Carga Estáttica / Dinámica</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frerg_cargest]","valor"=>"SI","actual"=>$datconsultaso->frerg_cargest_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="emergencia" class="control-label col-lg-8">Postura Forzada</label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frerg_postforz]","valor"=>"SI","actual"=>$datconsultaso->frerg_postforz_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Diseño de Puesto </label>
                  <label class="col-lg-4">
                    <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frerg_dispuest]","valor"=>"SI","actual"=>$datconsultaso->frerg_dispuest_t99),true)?>
                  </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Manipulación de Cargas </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frerg_manicarg]","valor"=>"SI","actual"=>$datconsultaso->frerg_manicarg_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <label for="cronicas" class="control-label col-lg-8">Movimientos Repetitivos </label>
                <label class="col-lg-4">
                  <?=$this->load->view('Genericas/gen_radio_check',array("size"=>"mini","tipo"=>"checkbox","nombre"=>"consultaso[frerg_movrept]","valor"=>"SI","actual"=>$datconsultaso->frerg_movrept_t99),true)?>
                </label>
              </div>
              <div class="form-group">
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="consultaso[frerg_obs]" value="<?=$datconsultaso->frerg_obs_t99?>" />
                </div>
              </div>
            </div>
          </div>