<?
  //var_dump($datconsulta->datevoldiaria);
  //exit;
?>
  <fieldset>
    <div class="container">
      <div class="modal fade" tabindex="-1" id="modalregqx" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Resultado Laboratorio</h4>
            </div>
            <div class="modal-body">
              <form id="form_historia_ordmed" class="form-horizontal" role="form" action="<?=site_url("pacientes/historia/guardar/".$dathistoria->idps_historia_t4)?>" method="post">
                <input type="hidden" name="urldestino" value="<?=$this->uri->uri_string()?>" />
                <div class="form-group">
                  <div class="col-lg-12">
                    <label for="procsres" class="col-lg-7 control-label">Resultado:</label>
                    <textarea name="procsres" class="form-control" id="procsres" rows="3" placeholder="Descripcion de la cirugia..."></textarea>
                  </div> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </fieldset>
