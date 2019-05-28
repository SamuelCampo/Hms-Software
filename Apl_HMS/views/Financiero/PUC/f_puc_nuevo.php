<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url("financiero/puc/registrar/guardar/$puc->id_puc_t4")?>"  method="post"  enctype="multipart/form-data">
<div class="row">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-10">
    <div class="form-group row">
      <div class="form-group row row text-center">
        <legend class="text-left">PUC</legend>
      </div>
      <div class="form-group row">
        <label for="cod" class="col-lg-2 control-label">Código</label>
        <div class="col-lg-5">
          <input name="cod" type="text" class="form-control" id="cod" placeholder="No. Cuenta" value="<?=$puc->cod_t4?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="desc" class="col-lg-2 control-label">Descripción</label>
        <div class="col-lg-5">
          <input name="desc" type="text" class="form-control" id="desc" placeholder="Nombre de la Cuenta" value="<?=$puc->desc_t4?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="clasecta" class="col-lg-2 control-label">Clase de Cuenta</label>
        <div class="col-lg-5">
          <select class="form-control" name="clasecta"  id="clasecta">
            <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Puc->arr_clasecta,"tipo_cuenta","cuenta",$puc->clasecta_t4))?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nivel" class="col-lg-2 control-label">Nivel</label>
        <div class="col-lg-5">
          <select class="form-control" name="nivel"  id="nivel">
            <option></option>
             <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Puc->arr_nivel,"tipo_nivel","nivel",$puc->nivel_t4))?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="ctamayor" class="col-lg-2 control-label">Cuenta Mayor</label>
        <div class="col-lg-5">
          <input  name="ctamayor" type="text" class="form-control" id="ctamayor" placeholder="Cuenta Mayor" value="<?=$puc->ctamayor_t4?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="activof" class="col-lg-2 control-label">Activo Fijo?</label>
        <div class="radio col-lg-5">
          <label>
            <input type="radio" name="activof" id="activof1" value="SI" <?=$this->Planthtml->checradio("SI",$puc->activof_t4)?> >
            SI
          </label>
          <label>
            <input type="radio" name="activof" id="activof2" value="NO" <?=$this->Planthtml->checradio("NO",$puc->activof_t4)?> >
            NO
          </label>
        </div>
      </div>
      <div class="form-group row">
        <label for="tercero" class="col-lg-2 control-label">Requiere Tercero?</label>
        <div class="radio col-lg-5">
          <label>
            <input type="radio" name="tercero" id="tercero1" value="SI" <?=$this->Planthtml->checradio("SI",$puc->tercero_t4)?> >
            SI
          </label>
          <label>
            <input type="radio" name="tercero" id="tercero2" value="NO" <?=$this->Planthtml->checradio("NO",$puc->tercero_t4)?> >
            NO
          </label>
        </div>
      </div>
      <div class="form-group row">
        <label for="ctaasoci" class="col-lg-2 control-label">Cuenta Asociada?</label>
        <div class="radio col-lg-5">
          <label>
            <input type="radio" name="ctaasoci" id="ctaasoci1" value="SI" <?=$this->Planthtml->checradio("SI",$puc->ctaasoci_t4)?> >
            SI
          </label>
          <label>
            <input type="radio" name="ctaasoci" id="ctaasoci2" value="NO" <?=$this->Planthtml->checradio("NO",$puc->ctaasoci_t4)?> >
            NO
          </label>
        </div>
      </div>
      <div class="form-group row">
        <label for="saldo" class="col-lg-2 control-label">Saldo actual</label>
        <div class="col-lg-5">
          <input name="saldo" type="text" class="form-control" id="saldo" placeholder="Saldo" value="<?=$puc->saldo_t4?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="ctaniif" class="col-lg-2 control-label">Cuenta Espejo (NIIF)</label>
        <div class="col-lg-5">
          <input name="ctaniif" type="text" class="form-control" id="saldo" placeholder="Cuenta Espejo (NIIF)" value="<?=$puc->ctaniif_t4?>">
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

 
 
  