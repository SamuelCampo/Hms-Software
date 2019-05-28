<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url('financiero/ccosto/registrar/guardar/'.$ccosto->id_ccosto_t11)?>"  method="post"  enctype="multipart/form-data">
<div class="col-lg-12">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-10">
    <div class="form-group row">
      <div class="form-group row row text-center">
        <legend class="text-left">Centros de Costo</legend>
      </div>
      <div class="form-group row">
        <label for="ccosto" class="col-lg-3 control-label">Código</label>
        <div class="col-lg-5">
          <input name="ccosto" type="text" class="form-control" id="ccosto" placeholder="Código Centro de Costo" value="<?=$ccosto->cod_t11?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="nombreccosto" class="col-lg-3 control-label">Descripción</label>
        <div class="col-lg-5">
          <input name="nombreccosto" type="text" class="form-control" id="nombreccosto" placeholder="Nombre Centro de Costo" value="<?=$ccosto->desc_t11?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="tipoccosto" class="col-lg-3 control-label">Tipo</label>
        <div class="col-lg-5">
          <input name="tipoccosto" type="text" class="form-control" id="tipoccosto" placeholder="Tipo Centro de Costo" value="<?=$ccosto->tipo_t11?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="ccostomayor" class="col-lg-3 control-label">Centro de Costo Mayor</label>
        <div class="col-lg-5">
          <input name="ccostomayor" type="text" class="form-control" id="ccostomayor" placeholder="Centro de Costo Mayor" value="<?=$ccosto->ccmayor_t11?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="activo" class="col-lg-3 control-label">Activo</label>
        <div class="col-lg-5">
          <input name="activo" type="text" class="form-control" id="activo" placeholder="Centro de Costo Mayor" value="<?=$ccosto->activo_t11?>">
        </div>
      </div>
  </div>
</div>
    <div class="form-group">
              <div class="row text-center">
                <button type="submit" class="btn bg-navy">Guardar</button>
              </div>
    </div>
</div>
</form>

 
  