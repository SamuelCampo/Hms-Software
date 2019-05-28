<?
?>
<form class="form-horizontal" role="form" action="<?=site_url("facturacion/rips/nuevo/confirmar")?>" method="post">
  <div class="form-group">
    <label for="fechad" class="col-lg-2 control-label">Periodo</label>
    <div class="col-lg-2">
     <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechad" type="text" class="form-control form_date" id="fechad" placeholder="Desde" value="">
     </div>
    </div>
    <div class="col-lg-2">
      <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
       <input name="fechah" type="text" class="form-control form_date" id="fechah" placeholder="Hasta" value="">
     </div>
    </div>
  </div>
  <div class="form-group">
    <label for="fechad" class="col-lg-2 control-label">Factura</label>
    <div class="col-lg-6">
      <div class="input-group">
       <input name="factnum" type="text" class="form-control" id="factnum" placeholder="No." value="">
     </div>
    </div>
  </div>
  <div class="form-group">
    <label for="entidad" class="col-lg-2 control-label">Entidad</label>
    <div class="col-lg-6">
      <input type="text" name="tercdesc" id="tercdesc" class="form-control" value="<?=$datfac->tercdesc_t96?>" placeholder="TERCERO">
      <input type="hidden" name="tercid" id="tercid" value="" >
    </div>
  </div>
  <div class="form-group">
    <label for="convenio" class="col-lg-2 control-label">Convenio</label>
    <div class="col-lg-6">
      <input type="text" name="conveniodesc" id="conveniodesc" class="form-control" value="" placeholder="CONVENIO">
      <input type="hidden" name="convenio" id="convenio" value="" >
    </div>
  </div>
  <div class="form-group">
    <label for="tipocta" class="col-lg-2 control-label">Tipo Cuenta</label>
    <div class="col-lg-6">
      <select name="tipocta" class="form-control" >
        <option></option> 
        <?=$this->load->view('Genericas/gen_menu',$this->Modulo->confmenu($this->Factura->tiposctas(),"tipocta_t99","tipocta_t99",$datfac->tipo_t96))?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="row text-center">
     <br/>
     <button type="submit" class="btn <?=$this->Planthtml->estilo->colorprinc?>">Generar</button>
    </div>
  </div>
</form>