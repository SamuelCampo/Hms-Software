<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url('/financiero/impuestos/registrar/guardar/'.$impuesto->idparam_imptos_t400)?>" method="post">
  <div class="col-lg-12">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-10">
    <div class="form-group row">
      <div class="form-group row row text-center">
        <legend class="text-left">Impuestos</legend>
      </div>
      <div class="form-group row">
        <label for="codigo" class="col-lg-3 control-label">Código</label>
        <div class="col-lg-5">
          <input name="codigo" type="text" class="form-control" id="codretencion" placeholder="Código Impuesto" value="<?=$impuesto->codigo_t400?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="descripcion" class="col-lg-3 control-label">Descripción</label>
        <div class="col-lg-5">
          <input name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Descripción" value="<?=$impuesto->descripcion_t400?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="tipoimp" class="col-lg-3 control-label">Tipo</label>
        <div class="col-lg-5">
          <select class="form-control input-sm" name="tipoimp"  >
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Impuesto->arr_tipoimp,"tipo","tipo",$impuesto->tipoimp_t400))?>
        </select>
      </div>
      </div>
      <div class="form-group row">
        <label for="tipodoc" class="col-lg-3 control-label">Tipo Documento</label>
        <div class="col-lg-5">
          <select class="form-control input-sm" name="tipodoc"  >
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Impuesto->arr_tipodocs,"tipodocs","tipodocs",$impuesto->tipodoc_t400))?>
        </select>
      </div>
      </div>
      <div class="form-group row">
        <label for="base" class="col-lg-3 control-label">Base</label>
        <div class="col-lg-5">
          <input name="base" type="text" class="form-control" id="porcentajeimpuesto" placeholder="Base" value="<?=$impuesto->base_t400?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="cuenta" class="col-lg-3 control-label">Cuenta</label>
        <div class="col-lg-5">
          <input name="cuentadesc" type="text" class="form-control cuentacont" id="cuentadesc" placeholder="Cuenta" value="<?=$impuesto->ctadesc_t400?>">
          <input name="cuenta" type="hidden" id="cuenta" value="<?=$impuesto->cta_t400?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="estado" class="col-lg-3 control-label">Estado</label>
        <div class="col-lg-5">
          <select class="form-control input-sm" name="estado"  >
            <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Constante->arr_estado,"estado","estado",$impuesto->estado_t400))?>
        </select>
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


  