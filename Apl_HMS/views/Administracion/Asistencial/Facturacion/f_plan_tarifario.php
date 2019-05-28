<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>

<section class="modal-content">
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
        <fieldset style="margin:0 1em;">
          <legend>Planes Tarifarios</legend>
          
          <div class="form-group">
            <label for="descripcion" class="col-lg-3 control-label">Descripción</label>
            <div class="col-lg-5">
              <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripción" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="cod_concepto" class="col-lg-3 control-label">Código Concepto</label>
            <div class="col-lg-5">
              <input name="cod_concepto" type="text" class="form-control" id="cod_concepto" placeholder="Código Concepto" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="concepto" class="col-lg-3 control-label">Concepto</label>
            <div class="col-lg-5">
              <input name="concepto" type="text" class="form-control" id="concepto" placeholder="Concepto" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="valor" class="col-lg-3 control-label">Valor</label>
            <div class="col-lg-5">
              <input name="valor" type="text" class="form-control" id="valor" placeholder="Valor" value="">
            </div>
          </div>
          
          <div class="form-group">
              <div class="row text-center">
                <button type="submit" class="btn bg-navy">Guardar</button>
              </div>
          </div>
        </fieldset>
      </form>
</section>
    


 
  