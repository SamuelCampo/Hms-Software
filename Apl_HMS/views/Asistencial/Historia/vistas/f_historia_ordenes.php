<?if(!empty($datorden)&& !empty($orden)){
  $labact=''?>
<?}else{
  $labact='active'?>
<?}?>
    <div class="row" style="padding: 0 1em;">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <?if(!empty($datorden)&& !empty($orden)){?>
              <li class="active text-center"><a href="#tab_detorden_<?=$datorden[0]->orden_t67?>" data-toggle="tab">Orden <?=$datorden[0]->orden_t67?></a></li>
            <?}?>
            <li class="<?=$labact?> text-center"><a href="#tab_labs" data-toggle="tab">Laboratorios</a></li>
            <li class="text-center"><a href="#tab_aydx" data-toggle="tab">Ayudas Dx</a></li>
            <li class="text-center"><a href="#tab_procedimientos" data-toggle="tab">Procedimientos</a></li>
            <li class="text-center"><a href="#tab_qx" data-toggle="tab">Quirurgico</a></li>
            <li class="text-center"><a href="#tab_otrosproc" data-toggle="tab">Otros Procedimientos</a></li>
          </ul>
          <div class="tab-content">
            <?if(!empty($datorden)&& !empty($orden)){?>
              <div class="tab-pane active" id="tab_detorden_<?=$datorden[0]->orden_t67?>">
                <?=$orden?>
              </div>
            <?}?>
            <div class="tab-pane <?=$labact?>" id="tab_labs">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'LABO',"tipoproc"=>'LABORATORIO'),true);?>
                </form>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["LABO"]),'Refresh');?>
              </div>
            </div>
            <div class="tab-pane" id="tab_aydx">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'AYDX',"tipoproc"=>'AYUDA DIAGNÓSTICA'),true);?>
                </form>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["AYDX"]),'Refresh');?>
              </div>
            </div>
            <div class="tab-pane" id="tab_procedimientos">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'PROC',"tipoproc"=>'PROCEDIMIENTO'),true);?>
                </form>
                
              </div>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["PROC"]),'Refresh');?>
            </div>
            <div class="tab-pane" id="tab_qx">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'QUIR',"tipoproc"=>'QUIRURGICO'),true);?>
                </form>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["QUIR"]),'Refresh');?>
              </div>
            </div>
            <div class="tab-pane" id="tab_otrosproc">
              <div class="row">
                <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                  <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                  <?=$this->load->view('Asistencial/Historia/f_historia_procedimientos',array("idtipoproc"=>'OTROSPROC'),true);?>
                </form>
                <?$this->load->view('Asistencial/Historia/l_historia_procedimientos',array("datlprocs"=>$datconsulta->datordenes["OTROSPROC"]),'Refresh');?>
              </div>
            </div>
          </div>
        </div>
  </div>

