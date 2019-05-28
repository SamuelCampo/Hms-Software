<?
  //var_dump($datconsulta->datevoldiaria);
  //exit;
?>
  <fieldset>
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active text-center"><a href="#tab_histevol" data-toggle="tab">Evolución</a></li>
            <li class="text-center"><a href="#tab_medica" data-toggle="tab">Médica</a></li>
            <li class="text-center"><a href="#tab_enfermeria" data-toggle="tab">Enfermería</a></li>
            <li class="text-center"><a href="#tab_terpres" data-toggle="tab">T. Respiratorias</a></li>
            <li class="text-center"><a href="#tab_terpfis" data-toggle="tab">T. Físicas</a></li>
            <li class="text-center"><a href="#tab_notaacla" data-toggle="tab">Nota Aclaratoria</a></li>
            <li class="text-center"><a href="#tab_salacx" data-toggle="tab">Sala Cx</a></li>
            <li class="text-center"><a href="#tab_odontog" data-toggle="tab">Odontograma</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_histevol">
              <?$this->load->view('Asistencial/Historia/l_historia_evoluciones',array("datevoldiariahist"=>$datconsulta->datevoldiaria),'refresh');?>
            </div>
            <div class="tab-pane" id="tab_medica">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evoldiariamed',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_enfermeria">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evoldiariaenf',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_terpres">
              <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evoldiariaterresp',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_terpfis">
              <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evoldiariaterfis',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_notaacla">
              <form id="form_historia_ordnotaclarat" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_notaclarat',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_salacx">
              <form id="form_historia_ordnotaclarat" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evolsalcx',"",true);?>
              </form>
            </div>
            <div class="tab-pane" id="tab_odontog">
              <form id="form_historia_ordnotaclarat" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <?=$this->load->view('Asistencial/Historia/f_historia_evolodont',"",true);?>
              </form>
            </div>
          </div>
        </div>
  </fieldset>