    <div class="row" style="padding: 0 1em;">
      <fieldset>
          <div class="col-lg-12">
            <div class='col-lg-6'>
                <legend><strong>Conducta</strong></legend>
                <div class="well"><?=$datconsulta->conducta_t64?></div>
            </div>
            <div class='col-lg-6'>
                <legend><strong>analisis1</strong></legend>
                <div class="well"><?=$datconsulta->planmanejo_t64?></div>
            </div>
          </div>
      </fieldset>
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active text-center"><a href="#tab_interc" data-toggle="tab">Otras Ordenes</a></li>
            <li class="text-center"><a href="#tab_remis" data-toggle="tab">Remisión</a></li>
            <li class="text-center"><a href="#tab_nota" data-toggle="tab">Nota Aclaratoria</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_interc">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'OTROSPROC'),true);?>
                </form>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["OTROSPROC"]),'Refresh');?>
              </div>
            </div>
            <div class="tab-pane" id="tab_remis">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_remision','',true);?>
                </form>
              </div>
            </div>
            <div class="tab-pane" id="tab_nota">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_notaclarat','',true);?>
                </form>
              </div>
            </div>
          </div>
        </div>
  </div>

