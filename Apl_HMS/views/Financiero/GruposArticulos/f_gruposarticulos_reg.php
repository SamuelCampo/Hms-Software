<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url('financiero/gruposarticulos/registrar/guardar/'.$v_f_gruposarticulos_reg->id_garticulos_t8)?>"  method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
      <div class="form-group row">
        <div class="form-group row row text-center">
          <legend class="text-left">Grupos de Artículos</legend>
        </div>
        <div class="form-group row">
          <label for="codgarticulos" class="col-lg-3 control-label">Código</label>
          <div class="col-lg-5">
            <input name="codgarticulos" type="text" class="form-control" id="codgarticulos" placeholder="Código Grupo de Artículos" value="<?=$v_f_gruposarticulos_reg->cod_t8?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nombregarticulos" class="col-lg-3 control-label">Descripción</label>
          <div class="col-lg-5">
            <input name="nombregarticulos" type="text" class="form-control" id="nombregarticulos" placeholder="Nombre Grupo de Artículos" value="<?=$v_f_gruposarticulos_reg->desc_t8?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctagastosgarticulos" class="col-lg-3 control-label">Cuenta de Gastos</label>
          <div class="col-lg-5">
            <input name="ctagastosgarticulos" type="text" class="form-control" id="ctagastosgarticulos" placeholder="Cuenta de Gastos" value="<?=$v_f_gruposarticulos_reg->ctagasto_t8?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaingresosgarticulos" class="col-lg-3 control-label">Cuenta de Ingresos</label>
          <div class="col-lg-5">
            <input name="ctaingresosgarticulos" type="text" class="form-control" id="ctaingresosgarticulos" placeholder="Cuenta de Ingresos" value="<?=$v_f_gruposarticulos_reg->ctaingreso_t8?>">
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

