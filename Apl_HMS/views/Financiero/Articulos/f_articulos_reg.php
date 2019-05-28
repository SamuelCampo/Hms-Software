<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url('financiero/articulos/registrar/guardar/'.$v_f_articulos_reg->id_articulos_t9)?>"  method="post"  enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
      <div class="form-group row">
        <div class="form-group row row text-center">
          <legend class="text-left">Artículos</legend>
        </div>
        <div class="form-group row">
          <label for="codarticulo" class="col-lg-3 control-label">Código</label>
          <div class="col-lg-5">
            <input name="codarticulo" type="text" class="form-control" id="codarticulo" placeholder="Código Artículo" value="<?=$v_f_articulos_reg->cod_t9?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nombrearticulo" class="col-lg-3 control-label">Descripción</label>
          <div class="col-lg-5">
            <input name="nombrearticulo" type="text" class="form-control" id="nombrearticulo" placeholder="Descripción Artículo" value="<?=$v_f_articulos_reg->desc_t9?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ivaarticulo" class="col-lg-3 control-label">IVA</label>
          <div class="col-lg-5">
            <input name="ivaarticulo" type="text" class="form-control" id="ivaarticulo" placeholder="IVA Artículo" value="<?=$v_f_articulos_reg->iva_t9?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tipoarticulo" class="col-lg-3 control-label">Tipo</label>
          <div class="col-lg-5">
            <select class="form-control" name="tipoarticulo"  id="clasecta">
              <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Articulo->arr_tipoart,"tipo","tipo",$v_f_articulos_reg->tipo_t9))?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="grupoarticulo" class="col-lg-3 control-label">Grupo</label>
          <div class="col-lg-5">
            <select class="form-control" name="grupoarticulo"  id="clasecta">
              <option></option>
               <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Grupoarticulo->listar(),"cod_t8","desc_t8",$v_f_articulos_reg->grupocod_t9))?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="tipoarticulo" class="col-lg-3 control-label">&nbsp;</label>
          <div class="col-lg-5">
              <input type="checkbox" name="compraarticulo" id="compraarticulo" value="SI" <?=$this->Planthtml->checradio("SI",$v_f_articulos_reg->compra_t9)?> >
              <b>Compra</b>
              <input type="checkbox" name="ventaarticulo" id="ventaarticulo" value="SI" <?=$this->Planthtml->checradio("SI",$v_f_articulos_reg->venta_t9)?> >
              <b>Venta</b>
              <input type="checkbox" name="actfijoarticulo" id="actfijoarticulo" value="SI" <?=$this->Planthtml->checradio("SI",$v_f_articulos_reg->actfijo_t9)?> >
              <b>Acivo Fijo</b>
          </div>
        </div>
        <div class="form-group row">
          <label for="ctagastosarticulo" class="col-lg-3 control-label">Cuenta de Gastos</label>
          <div class="col-lg-5">
            <input name="ctagastosarticulo" type="text" class="form-control cuentacont" id="ctagastosarticulo" placeholder="Cuenta de Gastos" value="<?=$v_f_articulos_reg->ctagasto_t9?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="ctaingresosarticulo" class="col-lg-3 control-label">Cuenta de Ingresos</label>
          <div class="col-lg-5">
            <input name="ctaingresosarticulo" type="text" class="form-control cuentacont" id="ctaingresosarticulo" placeholder="Cuenta de Ingresos" value="<?=$v_f_articulos_reg->ctaingreso_t9?>">
          </div>
        </div>  
        <div class="form-group row">
           <label for="bodpermitidaarticulo" class="col-lg-3 control-label">Bodegas Permitidas</label>
           <div class="col-lg-5">
              <input name="bodpermitidaarticulo" type="text" class="form-control" id="bodpermitidaarticulo" placeholder="Bodegas Permitidas" value="<?=$v_f_articulos_reg->bodperm_t9?>">
           </div>
        </div>
        <div class="form-group row">
           <label for="boddefectoarticulo" class="col-lg-3 control-label">Bodegas por Defecto</label>
           <div class="col-lg-5">
              <input name="boddefectoarticulo" type="text" class="form-control" id="boddefectoarticulo" placeholder="Bodegas por Defecto" value="<?=$v_f_articulos_reg->boddef_t9?>">
           </div>
        </div>
        <div class="form-group row">
           <label for="cantidad" class="col-lg-3 control-label">Cantidad</label>
           <div class="col-lg-5">
              <input name="cantidad" type="text" class="form-control" id="cantidad" placeholder="Cantidad" value="<?=$v_f_articulos_reg->cantidad_t9?>">
           </div>
        </div>
        <div class="form-group row">
           <label for="valor1" class="col-lg-3 control-label">Valor1</label>
           <div class="col-lg-5">
              <input name="valor1" type="text" class="form-control" id="valor1" placeholder="Precio" value="<?=$v_f_articulos_reg->valor1_t9?>">
           </div>
        </div>
        <div class="form-group row">
           <label for="valor2" class="col-lg-3 control-label">Valor2</label>
           <div class="col-lg-5">
              <input name="valor2" type="text" class="form-control" id="valor2" placeholder="Precio" value="<?=$v_f_articulos_reg->valor2_t9?>">
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
 
  