  <fieldset>
    <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
      <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
      <?=$this->load->view('Asistencial/Historia/f_historia_suministros',"",true);?>
    </form>
  </fieldset>

