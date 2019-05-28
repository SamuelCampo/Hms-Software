  <fieldset>
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active text-center"><a href="#tab_suminmeds" data-toggle="tab">Suministro Medicamentos</a></li>
            <li class="text-center"><a href="#tab_medicamentos" data-toggle="tab">Medicamentos</a></li>
            <li class="text-center"><a href="#tab_suministros" data-toggle="tab">Suministros</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_suminmeds">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_summedica',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_medicamentos">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_medicamentos',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_suministros">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_suministros',"",true);?>
              </form>
            </div>
          </div>
        </div>
  </fieldset>

