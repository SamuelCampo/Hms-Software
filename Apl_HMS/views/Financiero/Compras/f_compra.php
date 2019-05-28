<?
if(!empty($datos->idsfi_usuarios)){
  $readonly = "readonly";
  $disabled = "disabled";
}
?>
<form class="form-horizontal" role="form" action="<?=site_url("financiero/asientos/registrar/guardar/".$regcompra[0]->docnum_t401."/".$regcompra[0]->doctip_t401)?>"  method="post"  enctype="multipart/form-data">
  <div class="col-lg-11">
    <div class="col-lg-12">
      <div class="col-lg-12" style="font-size: 1.5em; border-bottom: 1px solid #b5b5b5;font-weight: bold;margin-bottom: .5em;">
        <span class="text-left pull-left">Registro de Compras</span>
        <?if(!empty($asiento[0]->docnum_t401)){?>
        <span class="pull-right well-sm">
          <strong>No.  <?=$asiento[0]->docnum_t401?></strong>
          <a href="<?=site_url("financiero/asientos/ver/".$asiento[0]->docnum_t401."/".$asiento[0]->doctip_t401)?>" class="btn btn-xs bg-navy">
            <span class="glyphicon glyphicon-print"></span>
          </a>
        </span>
        <?}?>
      </div>
      <div class="form-group no-margin">
        <label for="fdoc" class="col-lg-1 control-label">Fecha</label>
        <div class="col-lg-2">
          <input name="fdoc" type="text" class="form-control form_date" id="fdoc" placeholder="Fecha" value="<?=$regcompra[0]->fcont_t401?>">
        </div>
        <label for="clasecta" class="col-lg-1 control-label">Tercero</label>
        <div class="col-lg-8">
          <input type="text" class="form-control tercerodesp" name="tercerodesc" id="tercerodesc" value="<?=$regcompra[0]->tercerdesc_t401?>" />
          <input type="hidden" name="tercero" id="tercero" value="<?=$regcompra[0]->tercero_t401?>" />
        </div>
        <input type="hidden" name="doctip" value="COMPRA" />
      </div>
  </div>
  <div class='col-lg-12 no-margin no-padding'>
    <hr>
    <div class="col-lg-12">
      <div class="form-group">
        <label for="cod" class="col-lg-4">Articulo / Servicio</label>
        <label for="cod" class="col-lg-1">Cant</label>
        <label for="cod" class="col-lg-1">V/Unit</label>
        <label for="cod" class="col-lg-2">Valor</label>
        <label for="cod" class="col-lg-1">Iva</label>
        <label for="cod" class="col-lg-1">Ccosto</label>
        <div class="col-lg-1 pull-right">
          <a id="btnagregs" class="btn bg-navy btn-xs"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
      </div>
    </div>
    
    <div class="col-lg-12 no-padding no-marging">
      <div class="form-group no-padding no-marging" id="detregs">
        <div class="col-lg-4 no-padding no-marging">
          <input name="regdet[articulodesc][]" type="text" class="form-control articulodesp" id="articulodesc" placeholder="Articulo" value="" >
          <input name="regdet[articulo][]" type="hidden" id="articulo" value="" >
        </div>
        <div class="col-lg-1 no-padding no-marging">
          <input name="regdet[cantidad][]" type="text" class="form-control calcvtotal" id="cantidad" placeholder="Cant" value="" >
        </div>
        <div class="col-lg-1 no-padding no-marging">
          <input name="regdet[vunit][]" type="text" class="form-control calcvtotal" id="vunit" placeholder="V/Unit" value="" >
        </div>
        <div class="col-lg-2 no-padding no-marging">
          <input name="regdet[vtotal][]" type="text" class="form-control" id="vtotal" placeholder="Valor" value="" readonly>
        </div>
        <div class="col-lg-1 no-padding no-marging">
          <input name="regdet[ivadesc][]" type="text" class="form-control impuestodesp" id="ivadesc" placeholder="Iva" value="" >
          <input name="regdet[iva][]" type="hidden" id="iva" value="" >
        </div>
        <div class="col-lg-1 no-padding no-marging">
          <input name="regdet[ccostodesc][]" type="text" class="form-control ccostodesp" id="ccostodesc" placeholder="Centro de Costo" value="" >
          <input name="regdet[ccosto][]" type="hidden" id="ccosto" value="" >
        </div>
        <div class="col-lg-1 no-padding no-marging" onclick="$(this).parent().remove();">
          <button class="btn bg-navy btn-xs ">
           <span class="glyphicon glyphicon-trash btneliminar"></span>
         </button>
        </div>
      </div>
      <?if(is_array($regcompra)){
        foreach($regcompra as $regdet){
          ?>
          <div class="form-group no-padding no-marging" >
            <div class="col-lg-4 no-padding no-marging">
              <input name="regdet[cuentadesc][]" type="text" class="form-control cuentacont" placeholder="Cuenta Contable" value="<?=$regdet->cuentadesc_t401?>" >
              <input name="regdet[cuenta][]" type="hidden" value="<?=$regdet->cuenta_t401?>" >
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="regdet[debito][]" type="text" class="form-control" placeholder="Debe" value="<?=$regdet->debito_t401?>" >
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="regdet[credito][]" type="text" class="form-control" placeholder="Haber" value="<?=$regdet->credito_t401?>" >
            </div>
            <div class="col-lg-2 no-padding no-marging">
              <input name="regdet[concepto][]" type="text" class="form-control" placeholder="Concepto" value="<?=$regdet->concepto_t401?>" >
            </div>
            <div class="col-lg-1 no-padding no-marging">
              <input name="regdet[ccostodesc][]" type="text" class="form-control cuentacont" id="ccostodesc" placeholder="Centro de Costo" value="<?=$regdet->ccostodesc_t401?>" >
              <input name="regdet[ccosto][]" type="hidden" id="ccosto" value="<?=$regdet->ccosto_t401?>" >
            </div>
            <div class="col-lg-1 no-padding no-marging" onclick="$(this).parent().remove();">
              <button class="btn bg-navy btn-xs ">
               <span class="glyphicon glyphicon-trash btneliminar"></span>
             </button>
            </div>
          </div>
          <?
        }
      }
      ?>
      <div class="form-group no-padding no-marging" style='display: none;'>
        <div class="col-lg-4 no-padding no-marging">
          <input type="text" class="form-control cuentacont" id="cuentacontdesc" placeholder="Total" value="Total" readonly >
        </div>
        <div class="col-lg-2 no-padding no-marging">
          <input type="text" class="form-control" id="tdebito" placeholder="Debe" value="0" readonly >
        </div>
        <div class="col-lg-2 no-padding no-marging">
          <input type="text" class="form-control" id="tcredito" placeholder="Haber" value="0" readonly >
        </div>
      </div>
    </div>
    
    <div class="form-group row">
      <label for="obs" class="col-lg-2 control-label">Observaciones</label>
      <div class="col-lg-5">
        <textarea name="obs" class="form-control" rows="3"><?=$regcompra[0]->obs_t401?></textarea>
      </div>
    </div>
  </div>
  <div class="col-lg-12 form-group">
    <div class="row text-center">
      <button type="submit" class="btn bg-navy">Guardar</button>
    </div>
  </div>
</div>
</form>