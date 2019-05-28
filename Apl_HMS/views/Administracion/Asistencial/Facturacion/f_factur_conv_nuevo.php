<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <form class="form-horizontal" role="form" action="<?=site_url()."/".$this->uri->uri_string()?>/guardar" method="post">
        <fieldset style="margin:0 1em;">
          <legend>Convenios</legend>
          
          <div class="form-group">
            <label for="ccosto" class="col-lg-3 control-label">Código</label>
            <div class="col-lg-5">
              <input name="cod" type="text" class="form-control" id="ccosto" placeholder="Código Centro de Costo" value="<?=$empleado->cod_t17?>">
            </div>
          </div>
          <div class="form-group">
            <label for="nombreccosto" class="col-lg-3 control-label">Descripción</label>
            <div class="col-lg-5">
              <input name="desc" type="text" class="form-control" id="nombreccosto" placeholder="Nombre Centro de Costo" value="<?=$empleado->desc_t17?>">
            </div>
          </div>
          <div class="form-group">
            <label for="tipoccosto" class="col-lg-3 control-label">Tipo</label>
            <div class="col-lg-5">
              <input name="tipo" type="text" class="form-control" id="tipoccosto" placeholder="Tipo Centro de Costo" value="<?=$empleado->tipo_t17?>">
            </div>
          </div>
          <div class="form-group">
            <label for="ccostomayor" class="col-lg-3 control-label">Centro de Costo Mayor</label>
            <div class="col-lg-5">
              <input name="ccmayor" type="text" class="form-control" id="ccostomayor" placeholder="Centro de Costo Mayor" value="<?=$empleado->ccmayor_t17?>">
            </div>
          </div>
          <div class="form-group">
             <label for="ccostoactivo" class="col-lg-3 control-label">Activo</label>
             <div class="col-lg-5">
              <input type="checkbox" id="ccostoactivo" value="<?=$empleado->activo_t17?>"> 
             </div>
          </div>
          <div class="form-group">
              <div class="row text-center">
                <button type="submit" class="btn bg-navy">Guardar</button>
              </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="row"></div>
  </div>
</div>
    


 
  