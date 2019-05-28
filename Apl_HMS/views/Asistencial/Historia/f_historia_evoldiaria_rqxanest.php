<?
  //var_dump($datconsulta->datevoldiaria);
  //exit;
?>
  <div class="row">
      <legend>Descripción Qx - Registro Anestesia</legend>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active text-center"><a href="#tab_checkpreop" data-toggle="tab">Check Pre-Post Operatorio</a></li>
          <li class="text-center"><a href="#tab_descripqx" data-toggle="tab">Descripción de Cirugía</a></li>
          <li class="text-center"><a href="#tab_reganest" data-toggle="tab">Registro de Anestesia</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_checkpreop">
            <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?=$this->load->view('Asistencial/Historia/f_historia_evoldiaria_rqxchprepost',"",true);?>
            </form>
          </div>
          <div class="tab-pane" id="tab_descripqx">
            <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?=$this->load->view('Asistencial/Historia/f_historia_evoldiaria_rqx',"",true);?>
            </form>
          </div>
          <div class="tab-pane" id="tab_reganest">
            <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
              <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
              <?=$this->load->view('Asistencial/Historia/f_historia_evoldiaria_ranest',"",true);?>
            </form>
          </div>
        </div>
      </div>
  </div>