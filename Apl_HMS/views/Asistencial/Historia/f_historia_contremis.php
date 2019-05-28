    <div class="col-lg-12" style="padding: 0 1em;">
      <fieldset>
          <div class="col-lg-12">
            <div class='col-lg-6'>
                <legend><strong>Conducta</strong></legend>
                <div class="well"><?=$datconsulta->conducta_t64?></div>
            </div>
            <div class='col-lg-6'>
                <legend><strong>Plan de Manejo</strong></legend>
                <div class="well"><?=$datconsulta->planmanejo_t64?></div>
            </div>
          </div>
      </fieldset>
      <div class="col-lg-12">
        <form id="form_historia_ordproc" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
          <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
          <?=$this->load->view('Asistencial/Historia/f_historia_remision','',true);?>
        </form>
      </div>
  </div>

